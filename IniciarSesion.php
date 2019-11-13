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
        <div class="fondo">
            <div class="loginbox">
            <h2 class="LoginName">Iniciar Sesión</h2>
            <form action="iniciarprocesar.php" method="post">
                <div  class="fila">
                    <input type="text" name="usuario" placeholder="Usuario">
                </div>
                <div class="fila">
                    <input type="password" name="password" id="" placeholder="Contraseña">
                </div>
                <div class="fila">
                    <button class="btnlogin" type="submit">Iniciar Sesion</button>
                    <p> o <a href="crearusuario.php">Crea tu cuenta</a> </p>
                </div>
            </form>
        </div>
        </div>
        <?php include'partes/footer.php' ?>
    </div>
</body>
</html>