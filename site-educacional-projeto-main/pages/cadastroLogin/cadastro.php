<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["cadastro_username"];
    $password = $_POST["cadastro_password"];

    // Simulando armazenamento temporário das informações de cadastro
    $_SESSION["cadastro_username"] = $username;
    $_SESSION["cadastro_password"] = $password;

    echo "Cadastro realizado com sucesso!";
}
?>
