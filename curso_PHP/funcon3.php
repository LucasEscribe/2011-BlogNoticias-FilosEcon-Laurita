<?php
function comprobarargumentos () {
	$numerodeargumentos = func_num_args ();
	echo ("<u> uso de func_num_args().</u><br>");
	echo ("el numero de argumentos es $numerodeargumentos <br>");
	echo ("<br>");
	echo ("<u> uso de func_get_arg().</u><br>");
		for ($contador=0; $contador < $numerodeargumentos; $contador++){
			$argumento = func_get_arg($contador);
			echo ("El argumento $contador tiene el valor $argumento <br>");
		}

echo ("<br>");
echo ("<u>Uso de func_get_args().</u><br>");
$matrizdeargumentos=func_get_args();
for ($contador=0; $contador < $numerodeargumentos; $contador++){
$argumento=$matrizdeargumentos[$contador];
echo ("El argumento $contador tiene el valor $argumento<br>");
}
}

$variable1=1;
$variable2="Hola";
$variable3="ADIOS";
comprobarArgumentos($variable1, $variable2, $variable3);
?>