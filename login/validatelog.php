<?php
include('dblogin.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT*FROM usuariolog where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
   
    header("location:../index.php");

}else{
    ?>
    <?php
    include("indexlog.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);