<div id='cualquier'>

<center><h2>NOTA</h2></center>
<center>
<table border=1>
<th width=150 bgcolor="#8181F7">COD REPORTE</th>
<th width=150 bgcolor="#8181F7">COD ESTUDIANTE</th>
<th width=150 bgcolor="#8181F7">COD DOCENTE</th>
<th width=150 bgcolor="#8181F7">COD CURSO</th>
<th width=150 bgcolor="#8181F7">PERIODO</th>
<th width=150 bgcolor="#8181F7">NOTA 1</th>
<th width=150 bgcolor="#8181F7">NOTA 2</th>
<th width=150 bgcolor="#8181F7">NOTA 3</th>
<th width=150 bgcolor="#8181F7">DEFINITIVA</th>
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
$cod_reporte= $_POST["cod_reporte"];	
//echo "la coneccion fue exitosa";

$sql = " select *from reportes where cod_reporte='".$cod_reporte."'";

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
 
  echo "<th width=150>",$mostrar['cod_reporte']."</th>";
	echo "<th width=150>",$mostrar['cod_est']."</th>";
    echo "<th width=150>",$mostrar['cod_emp']."</th>";
	echo "<th width=150>",$mostrar['cod_curso']."</th>";
	echo "<th width=150>",$mostrar['periodo']."</th>";
	echo "<th width=150>",$mostrar['N1']."</th>";
	echo "<th width=150>",$mostrar['N2']."</th>";
	echo "<th width=150>",$mostrar['N3']."</th>";
	echo "<th width=150>",$mostrar['definitiva']."</th>";
	
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