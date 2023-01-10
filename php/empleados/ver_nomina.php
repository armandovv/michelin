<div id='cualquier'>

<center><h2>EMPLEADO</h2></center>
<center>
<table border=1>
       
	   <th width="105" bgcolor="#01A9DB">NOMB</th>
       <th width="100" bgcolor="#01A9DB">APELL</th>
       <th width="100" bgcolor="#01A9DB">DOC</th>	   
	   <th width="100" bgcolor="#01A9DB">COD NOM</th>
<th width="100" bgcolor="#01A9DB">COD EMP</th>
<th width="100" bgcolor="#01A9DB">CARGO</th>
<th width="100" bgcolor="#01A9DB">H.EXTRAS</th>
<th width="100" bgcolor="#01A9DB">VALOR H</th>
<th width="100" bgcolor="#01A9DB">DESC</th>
<th width="100" bgcolor="#01A9DB">EPS</th>
<th width="100" bgcolor="#01A9DB">CAJA</th>
<th width="100" bgcolor="#01A9DB">PENS</th>
<th width="100" bgcolor="#01A9DB">TOTAL</th> 

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
$cod_emp= $_POST["cod_emp"];	
//echo "la coneccion fue exitosa";

$sql = " select empleados.nombres, empleados.apellidos, empleados.documento, nomina.cod_nomina, nomina.cod_emp, nomina.cod_cargo, nomina.horas_trabajadas, nomina.valor_horas_trabajadas, nomina.descuento, nomina.aporte_eps, nomina.aporte_caja, nomina.aporte_pension, nomina.neto_a_pagar  from empleados, nomina where empleados.documento='".$documento."' and nomina.cod_emp='".$cod_emp."'";

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
 
	echo "<th width=105>",$mostrar['nombres']."</th>";
    echo "<th width=100>",$mostrar['apellidos']."</th>";
	echo "<th width=100>",$mostrar['documento']."</th>";
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