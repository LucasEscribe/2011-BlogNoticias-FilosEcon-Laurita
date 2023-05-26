<?php
$idioma = $_POST['idioma'];

switch($idioma){
	case 'esp':
		echo("Bienvenido ".$_POST['nom']."<br>");
		echo("Su correo es ".$_POST['mail']."<br>");
		echo("Nacionalidad ".$_POST['pais']."<br>");
		break;
	case 'por':
		echo("Boas-vindas ".$_POST['nom']."<br>");
		echo("Seu e-mail é ".$_POST['mail']."<br>");
		echo("Nacionalidade ".$_POST['pais']."<br>");
		break;
	case 'eng':
		echo("Welcome ".$_POST['nom']."<br>");
		echo("Your Mail is ".$_POST['mail']."<br>");
		echo("Nationality ".$_POST['pais']."<br>");
		break;
	}
?>