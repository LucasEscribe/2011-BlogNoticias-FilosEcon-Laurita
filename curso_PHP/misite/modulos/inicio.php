	<div id="body">
		<table align='center' cellpadding=5>
			<tr>
				<td colspan=2 align=center><h3>Construyendo un Front Controller en PHP</h3></td>
			</tr>
			<tr>
				<td><img src="mas/img/front.gif" width=300></td>
				<td>
				<?php
				echo htmlentities("
				Un front controller maneja todos los request en una aplicación 
				web y está estructurado usualmente en dos partes, el request handler, 
				que es donde se interpretan los parametros y se ejecuta la segunda parte, 
				el command hierarchy que es el comando o acción que debe ejecutar 
				la aplicación, tambien conocido como Page controller.
				",null,"UTF-8");
				?>
				</td>
			</tr>
		</table>
	</div>
