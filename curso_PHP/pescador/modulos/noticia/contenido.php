<?php
	require_once "config/bbdd.php";
	$consulta = "select * from noticia where id_noticia = '".$_GET['id_n']."'";
	$query = mysql_query($consulta);
	//##########
	$consulta2 = "select * from comentarios where id_noticia = '".$_GET['id_n']."'";
	$query2 = mysql_query($consulta2);
?>
<div id="body">
<table>
	 <?php
	 if($row=mysql_fetch_array($query,MYSQL_ASSOC)):
	 ?> 

<tr>
<td><?php echo $row['titulo']; ?></td>
</tr>
<tr>
<td><?php echo $row['detalle']; ?></td>
</tr>
<tr>
<td><?php echo $row['fecha']; ?>&nbsp;<html>a las</html>&nbsp;<?php echo $row['hora']; ?></td>
</tr>
<?php endif; ?>
</table>
<hr>
<form action="index.php?mod=noticia&acc=grabarComentario" method="POST">
<table cellpadding="3" cellspacing="6" border="10" bordercolor="#000080">
<caption>
Escriba su comentario!
</caption>
	<tr>
		<td bgcolor="#D3D3D3">
		Nombre:<br>
		<input type="text" name="nombre" value="Ingrese su nombre" maxlength="15" size="25">
		</td>
	</tr>

	<tr>
		<td>
		Correo:<br>
		<input type="text" name="correo" maxlength="15" size="25"><br>
		</td>
	</tr>

	<tr>
		<td>
		Mensaje:<br>
		<textarea rows="10" cols="30" name="mensaje"></textarea><br>
		</td>
	</tr>
</table>
<br>
	<input type="hidden" name="id_noticia" value="<?php echo $row['id_noticia'];?>">
	<input type="submit" name="enviar" id="enviar" value="Enviar">
</form>
<hr>
<table cellpadding="3" cellspacing="6" border="10" bordercolor="#000080">
	 <?php
	 while($row2=mysql_fetch_array($query2,MYSQL_ASSOC)):
	 ?> 
<tr>
<td></td>
</tr>

<tr>
<td><?php echo $row2['nombre'] ?></td>
</tr>

<tr>
<td><?php echo $row2['correo'] ?></td>
</tr>

<tr>
<td><?php echo htmlentities($row2['mensaje'],NULL,'UTF-8'); ?></td>
</tr>
<?php endwhile; ?>
</table>
	</div>