<?php
header("Content-Type: application/json");

$token = $_SERVER['HTTP_AUTHORIZATION'] ?? '';

if ($token !== '123456') {
    http_response_code(401);
    echo json_encode(["erro" => "Acesso negado"]);
    exit;
}

require_once "../config/conexao.php";

$sql = "SELECT nome, estoque, estoque_min FROM produtos";
$result = $pdo->query($sql);

echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));