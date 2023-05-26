<div id="menu">
	<ul>
		<li><a href="index.php?mod=inicio&acc=inicio">Inicio</a></li>
		<li><a href="index.php?mod=nosotros&acc=nosotros">Nosotros</a></li>
		
<?php if (@comprobar()): ?>
	Administraci&oacuten:<hr>
		<li><a href="index.php?mod=noticia&acc=crearnoticia">Crear Noticia</a></li>
		<li><a href="index.php?mod=noticia&acc=adminListar">Administrar Noticia</a></li>
		<li><a href="index.php?mod=login&acc=salir">Cerrar Sesi&oacute;n</a></li>
	</ul>
<?php else: ?>	
	<form action="index.php?mod=login&acc=login" method="post">
		USER: <input type="text" name="user">
		<br>
		clave: <input type="password" name="pass">
		<hr>
		<input type="submit" value="Enviar">
	</form>
<?php endif; ?>

</div>
