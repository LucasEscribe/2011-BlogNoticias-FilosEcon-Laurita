<?php
	require_once "config/bbdd.php";
 	$consulta = "insert into noticia values (NULL,'".$_POST['titulo']."','".$_POST['contenido']."',NOW(),NOW())";
	$query = mysql_query($consulta);
?>

<?php if(!$query):?>

<script type="text/javascript" >
	alert("Sus datos NO se guardaron!!!");
	location.href="index.php?mod=noticia&acc=contenido&id_n=<?php echo $_POST['id_noticia'];?>";
</script>

<?php else: ?>

<script type="text/javascript" >
	alert("Sus datos se guardaron correctamente");
	location.href="index.php?mod=noticia&acc=contenido&id_n=<?php echo $_POST['id_noticia'];?>";
</script>

<?php endif; ?>