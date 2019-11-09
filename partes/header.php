<?php 
if (isset($_SESSION["Usuario"])) {
    $Nombre=$_SESSION["Usuario"];

}
$asd="asd";
?>    


<body>
    <div id="reference">
        <ul class="ul1">
        <?php if (isset($_SESSION["Usuario"])){ ?>
            <li class="li1"><?php echo($Nombre) ?></li>
            <li class="li1"><a href="logout.php">Cerrar Sesion</a></li>
        <?php }else { ?>
            <li class="li1"><a href="IniciarSesion.php">Iniciar Sesion</a></li>
            <li class="li1"><a href="crearusuario.php">Registrar Usuario</a></li>
        <?php }?>
        </ul>
    </div>
    <header>
        <img src="imagenes/logo.jpg" alt="">
        Foros Gamers
    </header>
    <nav>
        <ul>
            <li><a href="Index.php">Inicio</a></li>
            <li><a href="Foros.php">Foros</a></li>
            <li><a href="Noticias.php">Noticias</a></li>
            <li><a href="Videos.php">Videos</a></li>
            <li><a href="Comunidad2.php">Comunidad</a></li>
        </ul>
    </nav>
</body>