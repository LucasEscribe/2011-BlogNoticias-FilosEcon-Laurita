<?php
	define("MODULE_PATH","modulos/");
	define("TEMPLATE_PATH","view/");
	
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'header.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'menu.php';
	
	switch($_GET["seccion"]){
		case "nosotros":
			$action = "nosotros";
			break;
		case "descarga":
			$action = "descarga";
			break;
		case "clientes":
			$action = "clientes";
			break;
		default:
			$action = "inicio";
	}
	require_once dirname(__FILE__).'/'.MODULE_PATH.$action.'.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'foot.php';
?>
