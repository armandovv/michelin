<div id='cualquier'>

<center><h2>CARGO</h2></center>
<center>
<table border=1>
<th width=180 bgcolor="#FE2E2E">COD CARGO</th>
       <th width=180 bgcolor="#FE2E2E">NOMBRE CARGO</th>
	   <th width=180 bgcolor="#FE2E2E">DESCRIPCION</th>
	   <th width=180 bgcolor="#FE2E2E">SALARIO</th>	    

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
$cod_cargo= $_POST["cod_cargo"];	
//echo "la coneccion fue exitosa";

$sql = " select *from cargos where cod_cargo='".$cod_cargo."'";

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
 
  echo "<td width=180>",$mostrar['cod_cargo']."</td>";
	echo "<td width=180>",$mostrar['nombre']."</td>";
	echo "<td width=180>",$mostrar['descripcion']."</td>";
	echo "<td width=180>",$mostrar['salario']."</td>";	
	
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