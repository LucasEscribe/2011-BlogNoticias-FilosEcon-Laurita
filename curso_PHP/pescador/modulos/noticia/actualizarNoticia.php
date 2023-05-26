<?php
require_once "config/bbdd.php";
$consulta = "update noticia set titulo = '".$_POST['titulo']."', detalle = '".$_POST['detalle']."', fecha = NOW(), hora = NOW() where id_noticia = '".$_POST['id_noticia']."'";
$query = mysql_query($consulta);
if($query) {
	?>
<script type="text/javascript" >
	alert("Sus datos fueron guardados.");
	location.href="index.php?mod=noticia&acc=contenido&id_n=<?php echo $_POST['id_noticia']; ?>";
</script>	
	<?php
}else{
	?>
<script type="text/javascript" >
	alert("Sus datos NO fueron guardados.");
	location.href="index.php?mod=noticia&acc=contenido&id_n=<?php echo $_POST['id_noticia']; ?>";
</script>	
	<?php
}
?>