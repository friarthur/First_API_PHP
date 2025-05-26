<?php
header('Content-Type: application/json');
require 'conexao.php';

try {
    $stmt = $pdo->query("SELECT * FROM usuarios"); // substitua por sua tabela
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($dados);
} catch (PDOException $e) {
    echo json_encode(['erro' => $e->getMessage()]);
}
