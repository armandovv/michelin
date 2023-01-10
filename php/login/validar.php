
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


$dbhost= "localhost";
$dbuser="root";
$dbpass="";
$dbname="liceo_michelin";
$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
  {echo " LO SENTIMOS, ESTE SITIO WEB ESTA EXPERIMENTANDO PROBLEMAS  <BR>";
	echo "error: Fallo al conectarse a mysql debido a : <br>";
		echo"errno: " . $mysqli->connect_errno . "<br>";
	exit;}

	$mail=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$query =mysqli_query ($conn,"select *from login where mail='".$mail."' and pass = '".$pass."'");
	$nr= mysqli_num_rows($query);
	if ($nr==1)
	{ 
		session_start();
		$_SESSION['mail'] = $mail;
	
	
	
			$fila = $query->fetch_row();
	
			/* la columna cuatro corresponde con la columna del nombre completo */
			$nombreusuario = $fila[1];
	
			/* Podrías guardarlo como variable de sesión */
			$_SESSION['nombreusuario'] = $nombreusuario;
	
			/* liberar el conjunto de resultados */
			
			echo '<script>alert("BIENVENIDO USUARIO")</script> ';
			header("Location: /michelin/paginas/foradministrativa.php");
			

		}
			
			
			
		
		
	


	
		else {
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='/michelin/paginas/forregistrar.html'</script>";
		}
	
	
	

?>