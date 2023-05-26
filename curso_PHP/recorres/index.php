<?php
	define("MODULE_PATH","modulos/");
	define("TEMPLATE_PATH","view/");
	
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'header.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'menu.php';
	
	switch($_GET["mod"]){
		case "lineas":
			$mod = "lineas";
			$acc = $_GET['acc'];
			break;
		default:
			$mod = "inicio";
			$acc = "inicio";
	}
	require_once dirname(__FILE__).'/'.MODULE_PATH.$mod.'/'.$acc.'.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'foot.php';
?>