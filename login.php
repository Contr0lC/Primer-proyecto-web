<?php
    // Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recoger los datos del login
    $username = $_POST["username"];
    $password = $_POST["password"];

    // comprobacion de usuarios ingresados 
    $valid_username = "admin";
    $valid_password = "contrasena";
    $valid_username1 = "usuario";

    /*inicio de secion del admin*/
    if ($username === $valid_username && $password === $valid_password) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: admin.html");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos. Por favor, intenta de nuevo.";
    }
    
    /*inicio de secion del usuario comun*/
    if ($username === $valid_username1 && $password === $valid_password) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: formulario.html");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos. Por favor, intenta de nuevo.";
    }
}
?>








