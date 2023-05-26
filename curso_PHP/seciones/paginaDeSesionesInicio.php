<?php
session_start();
isset($_SESSION['nombreDeUsuario']){
session_register($nombreDeUsuario, $colorElegido);}
?>
<html>
<head>
<title>Uso de sesiones</title>
</head>
<body>
<form name="fPrincipal" id="fPrincipal" method="post" action="paginaCeroDeSesiones.php">
Nombre de usuario:
<input type="text" name="nombreDeUsuario" id="nombreDeUsuario" value="">
<br>
color:
<select name="colorElegido" id="colorElegido">
<option value="#FF0000">Rojo</option>
<option value="#00FF00">verde</option>
<option value="#0000FF">azul</option>
</select>
<br>
<!-- creamos un campo oculto para mandar la constatnte de session id -->
<input type="hidden" name="<?php echo(session_name()); ?>" value="<?php
echo(session_id()); ?>">
<input type="submit" name="mandar" value="ACCEDER">
</form>
</body>
</html>