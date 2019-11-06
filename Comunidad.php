<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Foros G</title>
</head>
<body>
    <div class="contenedor">
        <?php include'partes/header.php' ?>
        <aside></aside>
        <article>
            <h2>Inicia Sesión</h2>
            <form action="" method="post">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="password" id="" placeholder="Contraseña">
                <input type="button" value="Ingresar">
            </form>
            <h3>* No posees una cuenta, crear una <a href="crearusuario.php">ahora</a></h3>
        </article>
        <aside></aside>
        <?php include'partes/footer.php' ?>
    </div>
</body>
</html>