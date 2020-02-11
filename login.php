<?php
// para conectar a la base de datos
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$conexion=mysqli_connect("localhost","root","","test");
$consulta="SELECT * FROM login WHERE usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas >0)
{
	header("Location: vista1.html");
	
}
else 
{
	echo "No ingreso"; 
}
	

?>