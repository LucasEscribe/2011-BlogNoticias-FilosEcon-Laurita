<div id="body">
<?php
	require_once "config/bbdd.php";
	/*
	*Consulta para el buscador
	*-------------------------
	*/
 	$consulta = "select * from noticia where titulo LIKE '%".$_POST['s']."%' OR detalle LIKE '%".$_POST['s']."%'";
 	$consulta2 = "select count(*) as reg from noticia where titulo LIKE '%".$_POST['s']."%' OR detalle LIKE '%".$_POST['s']."%'";
	$query = mysql_query($consulta);
	$query2 = mysql_query($consulta2);
	
	if($row2 = mysql_fetch_array($query2)):
	echo "Cantidad de busquedas encontradas:<div id='count'>".$row2['reg']."</div>";
	endif;
	
	while($row = mysql_fetch_array($query,MYSQL_ASSOC)):
?>
<table cellpadding="3" cellspacing="6" border="10" bordercolor="#000080">
<tr>
<td bgcolor="#D3D3D3"><?php echo $row['titulo'];?></td>
</tr>
<tr>
<td><?php echo $row['detalle'];?></td>
</tr>
<tr>
<td><?php echo $row['fecha'];?></td>
<tr>
<td><?php echo $row['hora'];?></td>
</tr>
<?php endwhile;?>
</table>	
</div>