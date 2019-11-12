<?php
# Entrada
$usuario = $_POST["Usuario"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

# Verificar que los password sean iguales
if ($password != $password2) {
    header("Location: crearusuario.php?error=password");
    exit;
}

# Verificar que el nickname no esté en uso
$pdo = new PDO("mysql:host=localhost;dbname=foro;charset=utf8", "root", "");
$query = "SELECT * FROM user WHERE Nick = '$usuario'";
$usuarios = $pdo->query($query)->fetchAll();

if (count($usuarios) > 0) {
    header("Location: crearusuario.php?error=usuario");
    exit;
}

# Guardar usuario en la tabla 'usuarios'
$hash = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO user VALUES (NULL, '$usuario', '$hash', '$email')";
$pdo->query($query);

# Enviar correo de bienvenida
$mensaje = "Hola $usuario, bienvenido al foro de videojuegos.";
mail($mail, "bienvenido al foro de videojuegos ", $mensaje, "From: admin@localhost");

session_start();
$_SESSION["Usuario"] = $usuario;
header("Location: INDEX.php");
?>