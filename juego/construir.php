<?php
require_once("class/class.php");
$ald=new Aldea();
$ald->ordenar_ampliar($_GET["edificio"]);
$ald->comprobar_recursos('no');
?>