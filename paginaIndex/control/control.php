<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
//echo "el usuario es:".$usuario;

if($usuario=="alfredo" && $contrasena=="12345678" || $usuario=="eduardo" && $contrasena=="12345")
{
//echo "usuario correcto";
//creamos la sesion
session_start();
//$_SESSION["va el nombre de la sesion"]=$usuario;
$_SESSION['usuario']=$usuario;
$_SESSION['contrasena']=$contrasena;
echo '<script>window.location="../encabezado.php"</script>';
}else{
    echo "<script>alert('usuario o contraseña incorrecta')</script>";
    echo '<script>window.location="../login.html"</script>';
    
}