
<?php
$usuario =$_POST["usuario"];
$password=$_POST["password"];
$db = new PDO("mysql:host=localhost;dbname=foro;charset=utf8", "root", "");
$stmt = $db->query("SELECT * FROM user WHERE Nick = '$usuario'");
$usuarios = $stmt->fetchAll();


if(count($usuarios)==0){
    header("Location: IniciarSesion.php?error=nickname ");
    exit;

}


$has_bd=$usuarios[0]["password"];

if(password_verify($password,$has_bd)){
    session_start();
    $_SESSION["Usuario"]=$usuario;
    header("Location: Index.php");
   }else{
    header("Location: Index.php?error=1");
}


/*print_r($usuarios);
die();*/
