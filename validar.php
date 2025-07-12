<?php
session_start();

// Usuário e senha fixos (só pra teste)
$usuario_correto = "Aldir";
$senha_correta = "1210";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if ($usuario === $usuario_correto && $senha === $senha_correta) {
    $_SESSION['logado'] = true;
    header("Location: home.php");
    exit;
} else {
    echo '<div style="display:flex;justify-content:center;align-items:center;height:100vh;">
            <div style="padding:24px 32px;background:#ffe0e0;border:1px solid #ff4d4d;border-radius:10px;box-shadow:0 2px 8px #0001;text-align:center;font-family:sans-serif;">
                <strong style="color:#ff1a1a;font-size:20px;">Epa! A senha ou o usuário está errada cara</strong><br>
                <span style="color:#333;">Tente novamente, você consegue!</span><br><br>
                <a href="index.php" style="display:inline-block;padding:10px 20px;background:#ff4d4d;color:#fff;text-decoration:none;border-radius:5px;font-weight:bold;transition:background 0.2s;">tenta de novo!</a>
            </div>
          </div>';
}
?>
