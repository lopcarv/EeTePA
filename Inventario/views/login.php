<?php
/**
 * views/login.php — Autenticação segura com sessões PHP
 */
session_start();

// 1. Se o usuário já estiver logado, redireciona para o dashboard
if (!empty($_SESSION["usuario_id"])) {
    header("Location: dashboard.php");
    exit;
}

require_once "../config/conexao.php";
$erro = "";

// 2. Processamento do Formulário de Login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $senha = $_POST["senha"] ?? "";

    // Proteção contra ataques CSRF [3, 5]
    if (empty($_POST["csrf_token"]) || $_POST["csrf_token"] !== ($_SESSION["csrf_token"] ?? "")) {
        $erro = "Requisição inválida. Recarregue a página.";
    } elseif (!$email) {
        $erro = "Por favor, insira um e-mail válido.";
    } else {
        // Busca o usuário usando Prepared Statements para evitar SQL Injection [3, 5]
        $stmt = getConexao()->prepare("SELECT id, nome, senha FROM usuarios WHERE email = :email AND ativo = 1 LIMIT 1");
        $stmt->execute(["email" => $email]);
        $usuario = $stmt->fetch();

        // Verifica a senha usando o hash bcrypt [6, 7]
        if ($usuario && password_verify($senha, $usuario["senha"])) {
            // Previne fixação de sessão regenerando o ID [3, 6]
            session_regenerate_id(true);
            
            $_SESSION["usuario_id"]   = $usuario["id"];
            $_SESSION["usuario_nome"] = $usuario["nome"];
            
            header("Location: dashboard.php");
            exit;
        } else {
            // Mensagem genérica para não revelar qual campo está incorreto (Segurança) [6, 7]
            $erro = "Credenciais inválidas. Tente novamente.";
        }
    }
}

// 3. Gera novo token CSRF para o formulário [8]
$_SESSION["csrf_token"] = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Sistema de Inventário</title>
    <!-- Link para o seu CSS personalizado -->
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- Bootstrap 5 para suporte ao layout [8, 9] -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo específico para centralizar o login */
        body { display: flex; align-items: center; justify-content: center; min-vh-100; margin: 0; }
        .login-container { width: 100%; max-width: 400px; padding: 15px; }
    </style>
</head>
<body class="bg-light">

<div class="login-container">
    <div class="card shadow">
        <div class="card-header text-center bg-dark text-white py-3">
            <h4>🔐 Acesso ao Sistema</h4>
        </div>
        <div class="card-body p-4">
            
            <?php if ($erro): ?>
                <div class="alert alert-danger" style="font-size: 14px;">
                    <?= htmlspecialchars($erro) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="login.php">
                <!-- Campo oculto para o Token CSRF [3, 10] -->
                <input type="hidden" name="csrf_token" value="<?= $_SESSION["csrf_token"] ?>">

                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" 
                           placeholder="admin@inventario.com" required autofocus>
                </div>

                <div class="form-group mb-4">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" 
                           placeholder="Digite sua senha" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary w-100 py-2">Entrar no Sistema</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center text-muted py-3">
            <small>Sistema de Inventário Inteligente &copy; <?= date('Y') ?></small>
        </div>
    </div>
</div>

</body>
</html>