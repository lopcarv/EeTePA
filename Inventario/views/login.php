<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

/* Se já estiver logado, vai para o dashboard */
if (!empty($_SESSION["usuario_id"])) {
    header("Location: dashboard.php");
    exit;
}

require_once __DIR__ . "/config/conexao.php";

$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $senha = $_POST["senha"] ?? "";

    if (!$email || !$senha) {
        $erro = "Informe e-mail e senha válidos.";
    } else {

        $sql = "SELECT id, nome, senha 
                FROM usuarios 
                WHERE email = :email 
                LIMIT 1";

        try {
            $stmt = getConexao()->prepare($sql);
            $stmt->execute(["email" => $email]);
            $usuario = $stmt->fetch();
        } catch (PDOException $e) {
            $erro = "Erro interno. Tente novamente.";
            $usuario = false;
        }

        if ($usuario && password_verify($senha, $usuario["senha"])) {

            session_regenerate_id(true);

            $_SESSION["usuario_id"]   = $usuario["id"];
            $_SESSION["usuario_nome"] = $usuario["nome"];

            header("Location: dashboard.php");
            exit;

        } else {
            $erro = "E-mail ou senha incorretos.";
        }
    }
}
<<<<<<< HEAD

/* HEADER DO LAYOUT (AQUI O CSS ENTRA) */
require __DIR__ . "/views/layout_header.php";
?>

<div class="card" style="max-width: 400px; margin: 40px auto;">
    <h2>Login do Sistema</h2>

    <?php if ($erro): ?>
        <p class="mensagem" style="color: red;">
            <?= htmlspecialchars($erro) ?>
        </p>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">Entrar</button>
        </div>
    </form>
</div>

<?php
/* FOOTER DO LAYOUT */
require __DIR__ . "/views/layout_footer.php";
=======
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login | Inventário</title>
</head>
<body>

<h2>🔐 Login do Sistema</h2>

<?php if ($erro): ?>
    <p style="color:red;">
        <?= htmlspecialchars($erro) ?>
    </p>
<?php endif; ?>

<form method="post">
    <label>E-mail</label><br>
    <input type="email" name="email" required><br><br>

    <label>Senha</label><br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Entrar</button>
</form>

</body>
</html>
>>>>>>> 805c0a1 (23052026 10h03)
