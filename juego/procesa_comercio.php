<?php
require_once("class/class.php");
$ald=new Aldea('no');

if ($_POST['accion']=='ofertar')
{
	$ald->ofertar();
}
if ($_POST['accion']=='enviar')
{
	$ald->enviar();
}

?>