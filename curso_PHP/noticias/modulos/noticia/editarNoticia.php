<?php
require_once "config/bbdd.php";
$consulta = "select * from noticia where id_noticia = '".$_GET['id_n']."'";
$query = mysql_query($consulta);
?>
<div id="body">
	<form action="index.php?mod=noticia&acc=actualizarNoticia" method="POST">
<?php
if($row = mysql_fetch_array($query, MYSQL_ASSOC)):
?>
	<table cellpadding="3" cellspacing="6" border="10" bordercolor="#000080">
	<caption>
	Est&aacute; por modificar la noticia!
	</caption>
		<tr>
		<td bgcolor="#D3D3D3">
		Titulo: <input value="<?php echo $row['titulo']; ?>" type="text" name="titulo">
		</td>
		</tr>
		<tr>
		<td>		
		Contenido: <br><textarea cols='30' rows='10' name="detalle"><?php echo $row['detalle']; ?></textarea><br>
		<input type="hidden" name="id_noticia" value="<?php echo $row['id_noticia']; ?>">
		</td>		
		</tr>
	</table>	
		<br><input type="submit" value="Actualizar">
<?php endif; ?>
	</form>		
</div>