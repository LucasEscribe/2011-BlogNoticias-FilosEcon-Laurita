<?php
require_once "config/bbdd.php";
$consulta = "delete from comentarios, noticia USING noticia INNER JOIN comentarios USING (id_noticia) WHERE noticia.id_noticia = ".$_GET['id_n'];
$query = mysql_query($consulta);

if($query):
	echo"
<script type='text/javascript'>
	alert('Sus datos se eliminaron.');
	location.href='index.php?mod=noticia&acc=adminListar';
	</script>
	";
else:	
	echo"
<script type='text/javascript'>
	alert('Sus datos se eliminaron.');
	location.href='index.php?mod=noticia&acc=adminListar';
	</script>
	";
endif;
?>