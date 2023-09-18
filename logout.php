<?php
session_start();
// Destruir la sesión para cerrar sesión
session_destroy();
header("Location: login.html");
exit();
?>
