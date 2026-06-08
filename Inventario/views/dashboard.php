<?php
session_start();

// Proteção de acesso
if (empty($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit;
}

// Inclui o layout com menu
require_once "layout_header.php";
?>

<div class="dashboard">
    <h2>Painel do Sistema</h2>

    <p class="descricao">
        Bem-vindo ao painel, <strong><?= htmlspecialchars($_SESSION["usuario_nome"]) ?></strong>.
    </p>

    <div class="cards">
        <div class="card">
            <h3>Produtos</h3>
            <p>Gerencie o cadastro e estoque de produtos.</p>
            <a href="../produtos.php?acao=listar" class="btn btn-primary">Acessar</a>
        </div>

        <div class="card">
            <h3>Movimentações</h3>
            <p>Registrar entradas e saídas de estoque.</p>
            <a href="movimentacao_form.php" class="btn btn-primary">Acessar</a>
        </div>
    </div>
</div>

<?php
require_once "layout_footer.php";