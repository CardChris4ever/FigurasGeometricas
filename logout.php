<?php
session_start(); // Iniciar la sesión para acceder a las variables de sesión
session_destroy(); // Destruir todas las variables de sesión

header("Location: index.php"); // Redirigir al usuario a la página de inicio de sesión
exit();
?>
