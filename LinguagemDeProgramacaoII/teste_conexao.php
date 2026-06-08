<?php
/**
 * teste_conexao.php — Script de validação temporária
 */
require_once "config/conexao.php";

try {
    $pdo = getConexao();
    echo "<h3>Conexão com o banco de dados realizada com sucesso!</h3>";
    
    // Consulta de teste para ler as categorias iniciais cadastradas
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM categorias");
    $resultado = $stmt->fetch();
    
    echo "Total de categorias encontradas no banco: " . $resultado['total'];
} catch (Exception $e) {
    echo "<h3>Falha no teste:</h3> " . $e->getMessage();
}