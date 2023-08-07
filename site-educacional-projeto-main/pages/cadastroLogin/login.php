<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["login_username"];
    $password = $_POST["login_password"];

    // Simulando credenciais de login válidas
    $valid_username = "usuario";
    $valid_password = "senha";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}
?>
