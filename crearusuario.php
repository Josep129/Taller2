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
            <h2>Crear Usuario</h2>
            <form action="Procesar_usuario.php" method="post">
                <input type="text" name="Usuario" placeholder="Usuario">
                <input type="email" name="email" id="" placeholder="Email">
                <input type="password" name="password" id="" placeholder="Contraseña">
                <input type="password" name="password2" id="" placeholder="Confirmar Contraseña">    
            </form>
        </article>
        <aside></aside>
        <?php include'partes/footer.php' ?>
    </div>
</body>
</html>