<?php
require_once("class/class.php");
$ald=new Aldea();
if (isset($_POST['accion']) && ($_POST['accion']=='reforzar' || $_POST['accion']=='atacar' || $_POST['accion']=='atracar'))
{
	$ald->ordenar_movimiento_tropas($_POST['accion']);
}
?>