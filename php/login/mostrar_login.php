<div id='cualquier'>
<center><h1>REGISTROS DE USUARIOS</h1></center>
<center>
<table border=1>
       <th width=180 bgcolor="#BDF5F8">ID</th>
       <th width=180 bgcolor="#BDF5F8">REALNAME</th>	 
	   <th width=180 bgcolor="#BDF5F8">EMAIL</th>	   
	   <th width=180 bgcolor="#BDF5F8">PASSWORD</th>	
       <th width=180 bgcolor="#BDF5F8">RPASS</th>	
       <th width=180 bgcolor="#BDF5F8">ROL</th>		   
</table></center>
<?php
error_reporting(0);
$mysqli = new mysqli('127.0.0.1','root','','liceo_michelin');

if($mysqli->connect_errno){
	echo "LO SENTIMOS, ESTE SITIO WEB ESTA EXPERIMENTANDO PROBLEMAS <br>";
	echo "error:Fallo al conectarse a mysql debido a: <br>";
	echo "errno:".$mysqli->connect_errno."<br>";
	exit;
}
	else
	{

$sql="select *from login";
$result=mysqli_query($mysqli,$sql);

while($mostrar=mysqli_fetch_array($result))
{
	echo "<center><table border=1>";
	
	echo "<td width=180>",$mostrar['id']."</td>";
	echo "<td width=180>",$mostrar['realname']."</td>";
	echo "<td width=180>",$mostrar['mail']."</td>";	
	echo "<td width=180>",$mostrar['pass']."</td>";
    echo "<td width=180>",$mostrar['rpass']."</td>";	
    echo "<td width=180>",$mostrar['rol']."</td>";		
}
echo "</table></center>";
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