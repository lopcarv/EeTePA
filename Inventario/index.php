<?php
session_start();

if (empty($_SESSION["usuario_id"])) {
    header("Location: login.php");
} else {
    header("Location: dashboard.php");
}
exit;