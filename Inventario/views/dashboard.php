<?php
/**
 * views/dashboard.php — Painel de Indicadores (KPIs)
 */
// Verificação de segurança: a sessão já deve ter sido iniciada no controlador ou header
if (empty($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit;
}

// Dependências necessárias para buscar os dados dos indicadores
require_once "../classes/Produto.php";
$produtoModel = new Produto();

// Busca dados para os KPIs (Baseado na lógica do Analisador Python) [4, 5]
$todosProdutos = $produtoModel->listarTodos();
$produtosCriticos = $produtoModel->listarCriticos();

$totalItens = count($todosProdutos);
$totalCriticos = count($produtosCriticos);
$valorPatrimonio = array_sum(array_column($todosProdutos, 'preco'));

require_once "layout_header.php"; // Inclui o cabeçalho padrão [6, 7]
?>

<main class="main-content">
    <div class="dashboard">
        <header class="page-header">
            <div>
                <h2>Resumo do Inventário</h2>
                <p class="descricao">Bem-vindo, <?= htmlspecialchars($_SESSION["usuario_nome"]) ?>. Aqui está o status atual do seu estoque.</p>
            </div>
            <a href="../produtos.php?acao=novo" class="btn">+ Adicionar Produto</a>
        </header>

        <!-- Seção de Cards de Indicadores (KPIs) baseada no seu CSS personalizado -->
        <div class="cards">
            <div class="card">
                <h3>Total de Itens</h3>
                <p style="font-size: 24px; font-weight: bold; color: #2563eb;"><?= $totalItens ?></p>
                <a href="../produtos.php?acao=listar">Ver todos</a>
            </div>

            <div class="card" style="border-left: 5px solid <?= $totalCriticos > 0 ? '#dc3545' : '#198754' ?>;">
                <h3>Estoque Crítico</h3>
                <p style="font-size: 24px; font-weight: bold; color: #dc3545;"><?= $totalCriticos ?></p>
                <a href="../produtos.php?acao=listar">Ver alertas</a>
            </div>

            <div class="card">
                <h3>Patrimônio Total</h3>
                <p style="font-size: 24px; font-weight: bold; color: #198754;">R$ <?= number_format($valorPatrimonio, 2, ',', '.') ?></p>
                <span style="font-size: 12px; color: #666;">Soma dos preços de venda</span>
            </div>
        </div>

        <!-- Atalhos Rápidos -->
        <div class="card" style="margin-top: 30px;">
            <div class="card-header">
                <h4>Atalhos do Sistema</h4>
            </div>
            <div class="form-actions">
                <a href="../produtos.php?acao=listar" class="btn">Gerenciar Produtos</a>
                <a href="movimentacao_form.php" class="btn" style="background-color: #6b7280;">Registrar Movimentação</a>
                <a href="../relatorios/relatorio_estoque.csv" class="btn-link" style="margin-left: 15px;">Baixar Último Relatório CSV</a>
            </div>
        </div>
    </div>
</main>

<?php require_once "layout_footer.php"; // Inclui o rodapé padrão [6, 7] ?>