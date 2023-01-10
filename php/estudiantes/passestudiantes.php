<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

if ($usuario=="123" && $password=="123")
    {
	echo "Bienvenido";
	header("Location:/michelin/paginas/forestconsulta.html");
	}
	else
	{
		echo "Error";
		echo "<html><h2>Acceso no autorizado.</h2><a href='javascript:window.history.go(-1)'>Volver</a></html>";
	}

?>