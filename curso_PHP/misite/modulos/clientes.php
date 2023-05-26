<div id="body">
	<?php
		include "config/bbdd.php";	
		$query = mysql_query("select*from clientes");	
	?>
	
	<h1>Lista Clientes</h1>
	<table>
		<tr>
			<td>Nombre y Apellido</td>
			<td>Direccion</td>
			<td>Edad</td>
		</tr>>
		<?php while($row = mysql_fetch_array($query,MYSQL_NUM)):?>
			<tr>		
				<td><?php echo $row[0];?></td>
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
			</tr>	
		<?php endwhile; ?>
	</table>
</div>