<?php
session_start();
include 'config.php';

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
    echo json_encode(["status" => "ok"]);
} else {
    echo json_encode([
        "status" => "erro",
        "erros"  => ["Erro ao salvar no banco: " . $stmt->error]
    ]);
}

$stmt->close();
$conn->close();
?>