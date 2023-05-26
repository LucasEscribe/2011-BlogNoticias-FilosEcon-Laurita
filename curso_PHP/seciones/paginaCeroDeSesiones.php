<?php
/*Como esta página recibe, en este caso a través de un campo oculto,
una constante que identifica una sesión, la función session_start()
ya no crea una sesión, si no que abre la sesion vigente.*/
session_start();
$_SESSION["nombreDeUsuario"]=$_POST["nombreDeUsuario"];
$_SESSION["colorElegido"]=$_POST["colorElegido"];
?>
<html>
<head>
<script language="javascript">
function mandar(){
alert("me voy");
document.f0.submit();
}
</script>
</head>
<body onLoad="javascrip:mandar();">
<form name="f0" id="f0" method="post" action="paginaUno.php">
<input type="hidden" name=<?php echo(session_name()); ?> value=<?php
echo(session_id()); ?>>
</form>
</body>
</html>