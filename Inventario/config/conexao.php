<?php
// config/conexao.php — Conexão centralizada com PDO [3]
define("DB_HOST", "localhost");
define("DB_NAME", "sistema_inventario");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_CHARSET", "utf8mb4");

function getConexao(): PDO {
    static $pdo = null; // Reutiliza a conexão na mesma requisição [3]
    if ($pdo === null) {
        $dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s", DB_HOST, DB_NAME, DB_CHARSET);
        $opcoes = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false, // Mais seguro contra SQL Injection [3]
        ];
        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $opcoes);
        } catch (PDOException $e) {
            error_log("Erro PDO: " . $e->getMessage());
            http_response_code(500);
            die("Erro interno do servidor. Tente novamente mais tarde.");
        }
    }
    return $pdo;
}