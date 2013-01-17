<?php
require_once("class/class.php");
$ald=new Aldea();

if (isset($_POST['s']))
{
	if ($_POST['s']==1)
	{
		$ald->cambiar_perfil();
	}
}
else
{
	header("Location:index.php");
}
?>