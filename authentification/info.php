<?php
session_start();

if(isset($_SESSION["login"]) && isset($_SESSION["pwd"]))
{
	echo "Bravo  M(e)".$_SESSION["login"]." vous êtes connecté(e)";
}
else
{	
	echo "Erreur vous devez recommencer!! ";
}

?>
<a href="deco.php">Se déconecter</a>

