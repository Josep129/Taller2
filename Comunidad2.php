<?php
session_start();
?>

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
        <div class="fondo">
        <?php include'partes/header.php' ?>
        
        <div class="fondo">
        <?php if(isset($_SESSION["Usuario"])) { ?>
        <h1>Estas Iniciado</h1>

        <?php }else{
           header ("Location: IniciarSesion.php");
            
        }
            ?>
        </div>

        <?php include'partes/footer.php' ?>
        </div>
    </div>
</body>
</html>