<html>
<head>
<title>uso de sesiones</title>
</head>
<body>
<?php
@session_start();
echo("El nombre de usuario es:".$_SESSION["nombreDeUsuario"]."<br>");
echo("El color elegido es: <h1><font color='".
$_SESSION["colorElegido"]."'>P&Aacute;GINA UNO</font></h1><br>");
?>
<a href="paginaDos.php?<?php echo(session_name());?>=<?php echo(session_id());?>">Ira pagina 2 </a>
<br>
<a href="paginaTres.php?<?php echo(session_name());?>=<?php echo(session_id());?>">Ira pagina 3 </a>
</body>
</html>