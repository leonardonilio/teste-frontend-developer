<?php
session_start();
include 'config.php';

// Inserir a avaliação
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $estrelas = $_POST['estrelas'] ?? 0;
    $comentario = $_POST['comentario'] ?? '';

if(!empty($nome) && !empty($comentario)) {
        $sql = $pdo->prepare("INSERT INTO reviews (nome, estrelas, comentario) VALUES (?, ?, ?)");
        $sql->execute([$nome, $estrelas, $comentario]);
    }
}

// Buscar avaliações
$query = $pdo->query("SELECT * FROM reviews ORDER BY criado_em DESC");
$reviews = $query->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($reviews);
?>