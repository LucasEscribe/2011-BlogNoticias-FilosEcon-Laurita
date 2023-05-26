<?php
	define("MODULE_PATH","modulos/");
	define("TEMPLATE_PATH","view/");
	
	require_once dirname(__FILE__).'/'.MODULE_PATH.'login/comprobar.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'header.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'menu.php';
	
	$mod = (empty($_GET["mod"]))?"inicio":$_GET["mod"];
	switch($mod){
		case "login":
			$mod = "login";
			$acc = $_GET['acc'];
			break;
		case "nosotros":
			$mod = "nosotros";
			$acc = $_GET['acc'];
			break;
		case "noticia":
			$mod = "noticia";
			$acc = $_GET['acc'];
			break;
		case "buscador":
			$mod = "buscador";
			$acc = $_GET['acc'];
			break;
		default:
			$mod = "inicio";
			$acc = "inicio";
	}
	require_once dirname(__FILE__).'/'.MODULE_PATH.$mod.'/'.$acc.'.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'foot.php';
?>