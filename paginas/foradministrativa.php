



<?php
 session_start();
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else if
(!empty($_SESSION['nombreusuario']))
{ 
 $sql= "select *from login where realname= '".$_SESSION['nombreusuario']."'";

$mysqli->query($sql);
}
$mysqli->close();
?><html>

<head>
     <link type="text/css" href="/michelin/css/administrativo.css" rel="stylesheet"/>
     <meta charset="UTF-8">
<title>ADMINISTRATIVO</title>

</head>
    <body>
		<div id="login" align="right">
			<p>Bienvenido<b>
			<?php echo
$_SESSION["nombreusuario"];?>&nbsp &nbsp<button type="submit" onclick='history.go(-1);'><img src="/michelin/imagenes/cerrarses1.png" width="" height="80"/></button></b>
			</p>
			</div>

<div id="administrativo">
	
	  <br/><center><img src="/michelin/imagenes/administrador.png"/><br/><br/>
	   
	   <table width="80%" border="2"><tr>
	   
	   <td><center>
	   <a href="/michelin/paginas/forcontactenos.html"><h1>CONTACTOS</h1></a>
	   <form method="POST" action="/michelin/php/contactos/mostrar_contactos.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>MOSTRAR BASE DE DATOS "CONTACTOS"</button>
		</form>
		<form method="POST" action="/michelin/php/contactos/borrar_contactos.php">
		<input size="" type="text" name="cod" required placeholder="eliminar contacto"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/contactos/mostrar_cod_contactos.php">
		<input size="" type="text" name="cod" required placeholder="digite codigo contacto"/>
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>	
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="42" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
		
		<td><center>
		<a href="/michelin/paginas/forcursos.html"><h1>CURSOS</h1></a>
		<form method="POST" action="/michelin/php/cursos/mostrar_cursos.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>MOSTRAR BASE DE DATOS "CURSOS"</button>		
		</form>
		<form method="POST" action="/michelin/php/cursos/borrar_cursos.php">
		<input type="text" name="cod_curso" required placeholder="eliminar curso"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/cursos/mostrar_cod_cursos.php">
		<input type="text" name="cod_curso" required placeholder="digite codigo curso"/>	
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
		
		<td><center>
		<a href="/michelin/paginas/forcargos.html"><h1>CARGOS</h1></a>
		<form method="POST" action="/michelin/php/cargos/mostrar_cargos.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>BASE DE DATOS CARGOS</button>
		</form>
		<form method="POST" action="/michelin/php/cargos/borrar_cargos.php">
		<input type="text" name="cod_cargo" required placeholder="eliminar cargo"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/cargos/mostrar_cod_cargos.php">		
		<input type="text" name="cod_cargo" required placeholder="digite codigo cargo"/>	
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
		
		<tr>
		</tr>
		
		<td><center>
		<a href="/michelin/paginas/forempleados.html"><h1>EMPLEADOS</h1></a>
		<form method="POST" action="/michelin/php/empleados/mostrar_empleados.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>BASE DE DATOS EMPLEADOS</button>
		</form>
		<form method="POST" action="/michelin/php/empleados/borrar_empleados.php">
		<input type="text" name="documento" required placeholder="eliminar empleado"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/empleados/mostrar_cod_empleados.php">		
		<input type="text" name="documento" required placeholder="digite documento"/>	
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
		
		<td><center>
		<a href="/michelin/paginas/forestudiantes.html"><h1>ESTUDIANTES</h1></a>
		<form method="POST" action="/michelin/php/estudiantes/mostrar_estudiantes.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>BASE DE DATOS ESTUDIANTES</button>
		</form>
		<form method="POST" action="/michelin/php/estudiantes/borrar_estudiantes.php">
		<input type="text" name="documento" required placeholder="eliminar estudiante"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/estudiantes/mostrar_cod_estudiantes.php">		
		<input type="text" name="documento" required placeholder="digite documento"/>	
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
		
		<td><center>
		<a href="/michelin/paginas/forreporte.html"><h1>NOTAS</h1></a>
		<form method="POST" action="/michelin/php/reportes/mostrar_reporte.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>NOTAS REGISTRADAS</button>
		</form>
		<form method="POST" action="/michelin/php/reportes/borrar_reporte.php">
		<input type="text" name="cod_reporte" required placeholder="eliminar nota"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/reportes/mostrar_cod_reporte.php">		
		<input type="text" name="cod_reporte" required placeholder="digite codigo nota"/>	
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
		
		<tr>
		</tr>
		
		<td><center>
		<a href="/michelin/paginas/fornomina.html"><h1>NOMINA</h1></a>
		<form method="POST" action="/michelin/php/nomina/mostrar_nomina.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>PAGOS A EMPLEADOS</button>
		</form>
		<form method="POST" action="/michelin/php/nomina/borrar_nomina.php">
		<input type="text" name="cod_nomina" required placeholder="eliminar pago"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/nomina/mostrar_cod_nomina.php">		
		<input type="text" name="cod_emp" required placeholder="digite codigo empleado"/>	
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
		
		<td><center>
		<a href="/michelin/paginas/forpagos.html"><h1>PAGOS</h1></a>
		<form method="POST" action="/michelin/php/pagos/mostrar_pagos.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>PAGOS DE ESTUDIANTES</button>
		</form>
		<form method="POST" action="/michelin/php/pagos/borrar_pagos.php">
		<input type="text" name="cod_pagos" required placeholder="eliminar pago"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/pagos/mostrar_cod_pagos.php">		
		<input type="text" name="cod_pagos" required placeholder="digite codigo estudiante"/>	
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
		
		<td><center>
		<a href="/michelin/paginas/forregistrar.html"><h1>LOGIN</h1></a>
		<form method="POST" action="/michelin/php/login/mostrar_login.php">
	    <button type="submit"><img src="/michelin/imagenes/d.png" width="42" height="42" style="vertical-align:middle"/>BASE DE DATOS USUARIOS</button><a href="/michelin/paginas/forlogin.html"><h1>MODIFICAR</h1></a>
		</form>
		<form method="POST" action="/michelin/php/login/borrar_login.php">
		<input type="text" name="id" required placeholder="eliminar usuario"/>
	    <button type="submit"><strong>SUPR</strong>&nbsp<img src="/michelin/imagenes/eliminar.png" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		<form method="POST" action="/michelin/php/login/mostrar_id_login.php">		
		<input type="text" name="id" required placeholder="digite id usuario"/>	
		<button type="submit"><strong>BUSCAR</strong>&nbsp&nbsp<img src="/michelin/imagenes/ver.jpg" width="42" height="42" style="vertical-align:middle"/></button>
		<button type="reset"><img src="/michelin/imagenes/borrar.png" width="" height="42" style="vertical-align:middle"/></button>
		</form>
		</center>
		</td>
				
		</tr></table></center>
</div>		
<br/>		
<center><button type="submit" onclick='history.go(-1);'><img src="/michelin/imagenes/c.png" width="42" height="42" style="vertical-align:middle">ATRAS</button></center>		
	    
	  
	  </body>
</html>