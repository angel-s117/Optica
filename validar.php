<?php
// para conectar a la base de datos
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost","root","","dbprueba");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
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
	
mysqli_free_result($resultado);
mysqli_close($conexion);
