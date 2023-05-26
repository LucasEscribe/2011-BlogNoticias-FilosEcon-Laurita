<html>
<head>
<script language='javascript' type='text/javascript'>
function volver() {
	location.href='clase30-2.html';
}
</script>
</head>
<body>
<?php
$src = $_FILES["fichero"]["tmp_name"];
$dst = "subidas/".$_FILES["fichero"]["name"];
if (move_uploaded_file($src, $dst)){
echo("fichero grabado.<br>");
} else {
echo("el fichero no se ha podido grabar.<br>");
echo $_FILES["fichero"]["error"];
}
echo ("<input type='button' name='retorno' id='retorno' value='VOLVER' onClick='javascript:volver();'>");
?>