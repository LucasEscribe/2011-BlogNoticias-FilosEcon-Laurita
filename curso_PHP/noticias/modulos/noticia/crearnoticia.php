<div id="body">
<?php
/*En caso de ser distinto de comprobar, puedo usar el header para que me redireccione al index.
O en vez del header puedo poner un exit("usted no está logeado").
En nuestro caso usamos un header y además un exit vacío como refuerzo adicional*/
if (!@comprobar()):
	header("Location: index.php");
	exit();
endif;
?>
	<form action="index.php?mod=noticia&acc=grabarNoticia" method="POST">
	<table cellpadding="3" cellspacing="6" border="10" bordercolor="#000080">
	<caption>
	Publique su noticia!
	</caption>
		<tr>
		<td bgcolor="#D3D3D3">
		Titulo: <input type="text" name="titulo">
		</td>
		</tr>
		<tr>
		<td>		
		Contenido: <br><textarea cols='30' rows='10' name="contenido"> </textarea><br>
		</td>		
		</tr>		
	</table>		
		<br><input type="submit" value="Grabar">
	</form>		
</div>