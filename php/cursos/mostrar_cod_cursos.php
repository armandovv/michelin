<div id='cualquier'>

<center><h2>CURSO</h2></center>
<center>
<table border=1>
<th width=150 bgcolor="#81F781">COD CURSO</th>
<th width=150 bgcolor="#81F781">CURSO</th>
<th width=150 bgcolor="#81F781">DESCRIPCION</th>
<th width=150 bgcolor="#81F781">COD EMPLEADO</th>
<th width=150 bgcolor="#81F781">NUM ESTUDIANTES</th>

</table>
</center>

<?php

error_reporting(0);

$mysqli = new mysqli('127.0.0.1','root','','liceo_michelin');

if ($mysqli->connect_errno) {
	echo " LO SENTIMOS, ESTE SITIO WEB ESTA EXPERIMENTANDO PROBLEMAS  <BR>";
echo "error: Fallo al conectarse a mysql debido a : <br>";
    echo"errno: " . $mysqli->connect_errno . "<br>";
exit;
}
else
{
$cod_curso= $_POST["cod_curso"];	
//echo "la coneccion fue exitosa";

$sql = " select *from cursos where cod_curso='".$cod_curso."'";

$result=mysqli_query($mysqli, $sql);  

if (mysqli_num_rows($result)==0)
{
	echo '<script>alert("REGISTRO NO ENCONTRADO VERIFIQUE")</script>';
}
else

while ($mostrar=mysqli_fetch_array($result))
{

echo "<center>";	
echo "<table border=1>";  
 
  echo "<th width=150>",$mostrar['cod_curso']."</th>";
	echo "<th width=150>",$mostrar['curso']."</th>";
    echo "<th width=150>",$mostrar['descripcion']."</th>";
	echo "<th width=150>",$mostrar['cod_emp']."</th>";
	echo "<th width=150>",$mostrar['n_estudiantes']."</th>";
	
}  
echo "</table>";
echo "</center>";
echo "la coneccion fue exitosa"; 

}
//
echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
?>

</div> 
<center><a href="javascript:imprSelec('cualquier')">IMPRIMIR</a>
	<script language="Javascript">
	function imprSelec (cualquier)
	{ 
	var ficha=document.getElementById(cualquier);
	var ventimp=window.open('','popimpr');
	ventimp.document.write( ficha.innerHTML );
	ventimp.document.close();
	ventimp.print();
	ventimp.close();
	}
	</script>	</center>