<?php
	if(isset($_SESSION["admin"]))
	{
		require("views/modif.phtml");
	}
	else
	{
		require("controllers/404.php");
	}
?>