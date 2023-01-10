<div id='cualquier'>

<center><h2>ESTUDIANTE</h2></center>
<center>
<table border=1>
       
	   <th width=190 bgcolor="#FF8000">NOMBRES</th>
       <th width=190 bgcolor="#FF8000">APELLIDOS</th>
	   <th width=190 bgcolor="#FF8000">DOCUMENTO</th>
       <th width=190 bgcolor="#FF8000">COD PAGO</th>
       <th width=190 bgcolor="#FF8000">COD ESTUDIANTE</th>	 
	   <th width=190 bgcolor="#FF8000">DESCRIPCION</th>	   
	   <th width=190 bgcolor="#FF8000">VALOR</th>	 

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
$documento= $_POST["documento"];
$cod_est= $_POST["cod_est"];	
//echo "la coneccion fue exitosa";

$sql = " select estudiante.nombres, estudiante.apellidos, estudiante.documento, pagos.cod_pagos, pagos.cod_est, pagos.descripcion, pagos.valor from estudiante, pagos where estudiante.documento='".$documento."' and pagos.cod_est='".$cod_est."'";

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
 
   echo "<th width=190>",$mostrar['nombres']."</th>";
	echo "<th width=190>",$mostrar['apellidos']."</th>";
	echo "<td width=190>",$mostrar['documento']."</td>";	
    echo "<td width=190>",$mostrar['cod_pagos']."</td>";
	echo "<td width=190>",$mostrar['cod_est']."</td>";
	echo "<td width=190>",$mostrar['descripcion']."</td>";	
	echo "<td width=190>",$mostrar['valor']."</td>";	
	
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