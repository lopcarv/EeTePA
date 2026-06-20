
<?php

$host = "localhost";
$db = "sistema";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
