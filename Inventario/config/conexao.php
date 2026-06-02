<?php
/**
 * conexao.php
 * Conexão PDO usando socket do MySQL do XAMPP (Linux)
 */

function getConexao(): PDO
{
    $db   = "sistema_inventario";
    $user = "root";
    $pass = "";
    $charset = "utf8mb4";

    // Socket correto do MySQL do XAMPP
    $socket = "/opt/lampp/var/mysql/mysql.sock";

    $dsn = "mysql:unix_socket=$socket;dbname=$db;charset=$charset";

    try {
        return new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
    } catch (PDOException $e) {
        die("Erro de conexão com o banco de dados: " . $e->getMessage());
    }
}