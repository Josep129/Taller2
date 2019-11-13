<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <?php include'partes/header.php' ?>
        <aside></aside>
        <article>
        <table width="90%" border="0" cellspacing="2" cellpadding="2">
            <form name="f" action="agregar.php" method="post">
            <input type="hidden" name="identificador" value="<?=$id?>">
            <tr>
            <td width="30%" align="right">Autor </td>
            <td><input type="text" name="autor"></td>
            </tr>
            <tr>
            <td width="30%" align="right">Titulo</td>
            <td><input type="text" name="titulo" value="<?=$titulo?>"></td>
            </tr>
            <tr>
            <td width="30%" align="right">Mensaje</td>
            <td><textarea name="mensaje" cols="50" rows="5"><?=$mensaje?></textarea></td>
            </tr>
            <tr>
            <td colspan="2" align="center"><input type="submit" name="Submit" value="Enviar Mensaje"></td>
            </tr>
            </form>
        </table>
        </article>
        <aside></aside>
        <?php include'partes/footer.php' ?>
    </div>
</body>
</html>