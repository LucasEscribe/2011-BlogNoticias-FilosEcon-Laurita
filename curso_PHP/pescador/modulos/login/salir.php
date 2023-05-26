<?php
		setcookie("user","",time()-36000);
		setcookie("loginTrue","",time()-36000);
		header("Location: index.php");
?>