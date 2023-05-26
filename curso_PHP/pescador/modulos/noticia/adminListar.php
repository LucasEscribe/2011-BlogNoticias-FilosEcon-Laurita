<?php
	require_once "config/bbdd.php";
	$consulta = "select * from noticia";
	$query = mysql_query($consulta);
?>
<div id="body">
	<div id = "noticia">
<table cellpadding="3" cellspacing="6" border="10" bordercolor="#000080">
<tr>
<td bgcolor="#D3D3D3">Titulo</td>
<td>Detalle</td>
<td>Fecha</td>
<td>Hora</td>
</tr>
	 <?php
	 while($row=mysql_fetch_array($query,MYSQL_ASSOC)):
	 ?> 
<tr>
<td><?php echo $row['titulo']; ?></td>
<td><?php echo $row['detalle']; ?>
<a href="index.php?mod=noticia&acc=contenido&id_n=<?php echo $row['id_noticia']; ?>"><br><b>Ver mas...</b></a>
<br>
<a href="index.php?mod=noticia&acc=editarNoticia&id_n=<?php echo $row['id_noticia']; ?>"><img src="mas/img/editar.jpg" width="25"></a>
<a href="index.php?mod=noticia&acc=eliminarNoticia&id_n=<?php echo $row['id_noticia']; ?>"><img src="mas/img/eliminar.jpg" width="25"></a>
</td>
<td><?php echo $row['fecha']; ?></td>
<td><?php echo $row['hora']; ?></td>
</tr>
<?php endwhile; ?>
</table>
	</div>
</div>