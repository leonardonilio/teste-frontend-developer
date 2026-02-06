<?php
session_start();
include 'config.php';
require __DIR__ . '/../composer/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
header("Content-Type: application/json");

$erros = [];

// validações
if (empty($_POST['nome']) || strlen($_POST['nome']) < 3) {
    $erros[] = "Nome inválido.";
}
if (empty($_POST['telefone']) || strlen($_POST['telefone']) < 10) {
    $erros[] = "\nTelefone inválido.";
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $erros[] = "\nEmail inválido.";
}
if (empty($_POST['ajuda']) || strlen($_POST['ajuda']) < 5) {
    $erros[] = "\nDescreva melhor como podemos ajudar.";
}
if (count($erros) > 3) {
    $erros = [];
    $erros[] = "Muitas informações faltando. Revise melhor o formulário.";
}
// se houver erros → retorna eles
if (!empty($erros)) {
    echo json_encode([
        "status" => "erro",
        "erros"  => $erros
    ]);
    exit;
}

// dados
$nome      = $_POST['nome'];
$telefone  = $_POST['telefone'];
$email     = $_POST['email'];
$ajuda     = $_POST['ajuda'];
$ip        = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// insert
$stmt = $conn->prepare("
    INSERT INTO leads (nome, telefone, email, ajuda, ip, user_agent)
    VALUES (?, ?, ?, ?, ?, ?)
");
$stmt->bind_param("ssssss", $nome, $telefone, $email, $ajuda, $ip, $userAgent);

//Faz uma verificação com o banco de dados
if ($stmt->execute()) {
    // ENVIAR EMAIL AO USUÁRIO
    $mail = new PHPMailer(true);

    try {
        // Config do servidor (exemplo Gmail)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'seu-email@gmail.com'; //coloque um email para testar
        $mail->Password   = 'senha-de-app'; // precisa da "senha de app" do email que você colocou
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Remetente
        $mail->setFrom('seu-email@gmail.com', 'FullStack Lab');

        // Destinatário (o usuário do formulário)
        $mail->addAddress($email, $nome);

        // Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Recebemos seu contato!';
        $mail->Body    = "
            <h2>Olá, $nome!</h2>
            <p>Recebemos seu contato e nossa equipe retornará em breve.</p>
            <p><strong>Sua mensagem:</strong></p>
            <p>$ajuda</p>
            <br>
            <p>Atenciosamente,<br>Equipe FullStack Lab</p>
        ";

        $mail->send();
    } catch (Exception $e) {
        // Em caso de erro no e-mail, só registra no log
        error_log("Erro PHPMailer: " . $mail->ErrorInfo);
    }

    echo json_encode(["status" => "ok"]);
    exit;
}
 else {
    echo json_encode([
        "status" => "erro",
        "erros"  => ["Erro ao salvar no banco: " . $stmt->error]
    ]);
}

$stmt->close();
$conn->close();
?>