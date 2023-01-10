<div id='cualquier'>

<center><h2>REGISTROS DE NOMINA</h2></center>
<center>
<table border=1>
<th width="100" bgcolor="#01A9DB">COD</th>
<th width="100" bgcolor="#01A9DB">EMP</th>
<th width="100" bgcolor="#01A9DB">CAR</th>
<th width="100" bgcolor="#01A9DB">HET</th>
<th width="100" bgcolor="#01A9DB">VHT</th>
<th width="100" bgcolor="#01A9DB">DES</th>
<th width="100" bgcolor="#01A9DB">EPS</th>
<th width="100" bgcolor="#01A9DB">CAJ</th>
<th width="100" bgcolor="#01A9DB">PEN</th>
<th width="100" bgcolor="#01A9DB">TOT</th>

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
//echo "la coneccion fue exitosa";

$sql = " select *from nomina";

$result=mysqli_query($mysqli, $sql);  


while ($mostrar=mysqli_fetch_array($result))
{

echo "<center>";	
echo "<table border=1>";  
 
    echo "<th width=100>",$mostrar['cod_nomina']."</th>";
    echo "<th width=100>",$mostrar['cod_emp']."</th>";
    echo "<th width=100>",$mostrar['cod_cargo']."</th>";
	echo "<th width=100>",$mostrar['horas_trabajadas']."</th>";
	echo "<th width=100>",$mostrar['valor_horas_trabajadas']."</th>";
	echo "<th width=100>",$mostrar['descuento']."</th>";
	echo "<th width=100>",$mostrar['aporte_eps']."</th>";
	echo "<th width=100>",$mostrar['aporte_caja']."</th>";
	echo "<th width=100>",$mostrar['aporte_pension']."</th>";
	echo "<th width=100>",$mostrar['neto_a_pagar']."</th>";
	
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