<?php

	$realname=$_POST['realname'];
	$mail=$_POST['mail'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

    require("connect_db.php");
	
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE mail='".$mail."'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
				echo "<script>'location.href='/michelin/paginas/forregistrar.html'</script>";
			}else{
				
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$mail','$pass','$rpass','2')");
				
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				 echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO GRAVADO</h1><br>");	
  echo("<img src=/michelin/imagenes/pajaro.jpg width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

?>