<?php

$lang = $_GET["lang"];
$req = "SELECT * FROM lessons WHERE lang = '".$lang."'";

$thisDb = mysqli_query($db, $req);

while($thisDbTab = mysqli_fetch_assoc($thisDb))
{	
	$id = $thisDbTab["id"];
	$title = $thisDbTab["title"];

	if(isset($_SESSION["admin"]))
	{
		require("views/bloc-cours_admin.phtml");
	}
	else
	{
		require("views/bloc-cours.phtml");
	}
}

?>