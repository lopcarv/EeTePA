<?php
<<<<<<< HEAD
=======
/**
 * layout_header.php
 * Cabeçalho padrão do sistema
 */

>>>>>>> 6159fe3 (24maio26 14h45)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<<<<<<< HEAD
=======

>>>>>>> 6159fe3 (24maio26 14h45)
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Inventário</title>
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS principal -->
=======

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Arquivo CSS principal -->
>>>>>>> 6159fe3 (24maio26 14h45)
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<<<<<<< HEAD
<header class="header">
    <div class="container">
        <h1>Sistema de Inventário</h1>

        <?php if (!empty($_SESSION['usuario_nome'])): ?>
            <nav class="menu">
                <a href="dashboard.php">Dashboard</a>
                <a href="produtos.php">Produtos</a>
                <a href="movimentacoes.php">Movimentações</a>
                <a href="logout.php">Sair</a>
            </nav>
        <?php endif; ?>
    </div>
</header>

<main class="main-content">
=======
    <header class="header">
        <div class="container">
            <h1>Sistema de Inventário</h1>

            <?php if (!empty($_SESSION['usuario_nome'])): ?>
                <nav class="menu">
                    <a href="dashboard.php">Dashboard</a>
                    <a href="produtos.php">Produtos</a>
                    <a href="movimentacoes.php">Movimentações</a>
                    <a href="logout.php">Sair</a>
                </nav>

                <div class="usuario">
                    Usuário: <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>
                </div>
            <?php endif; ?>
        </div>
    </header>

    <main class="main-content">
>>>>>>> 6159fe3 (24maio26 14h45)
