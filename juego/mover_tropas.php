<?php
require_once("class/class.php");
$ald=new Aldea();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
-->

</head>
<body>

<?php
/*if (isset($_GET['accion']))
{
	?>
	<h3>Confirmar <?php echo $_POST['accion'];?></h3>
	<br />
	Legionarios: <?php echo $_POST['tropa_1'];?><br />
	Pretorianos: <?php echo $_POST['tropa_2'];?><br />
	Triarios: <?php echo $_POST['tropa_3'];?><br />
	Caballeria Ligera: <?php echo $_POST['tropa_4'];?><br />
	Caballeria Pesada: <?php echo $_POST['tropa_5'];?><br />
	Generales: <?php echo $_POST['tropa_6'];?><br />
	Arietes: <?php echo $_POST['tropa_7'];?><br />
	Onagros: <?php echo $_POST['tropa_8'];?><br />
	Senadores: <?php echo $_POST['tropa_9'];?><br />
	Colonos: <?php echo $_POST['tropa_10'];?><br />
	<?php
}*/
?>
<form name="form_mover_tropas" method="post" action="procesa_tropas.php">

	Legionarios: <input type="text" name="tropa_1" value="0" /> <?php $ald->mostrar_tropa('tropa1');?><br /> 
	Pretorianos: <input type="text" name="tropa_2" value="0" /> <?php $ald->mostrar_tropa('tropa2');?><br />
	Triarios:	 <input type="text" name="tropa_3" value="0" /> <?php $ald->mostrar_tropa('tropa3');?><br />
	Caballeria Ligera: <input type="text" name="tropa_4" value="0" /> <?php $ald->mostrar_tropa('tropa4');?><br />
	Caballeria Pesada: <input type="text" name="tropa_5" value="0" /> <?php $ald->mostrar_tropa('tropa5');?><br />
	Generales: 	<input type="text" name="tropa_6" value="0" /> <?php $ald->mostrar_tropa('tropa6');?><br />
	Arietes: 	<input type="text" name="tropa_7" value="0" /> <?php $ald->mostrar_tropa('tropa7');?><br />
	Onagros: 	<input type="text" name="tropa_8" value="0" /> <?php $ald->mostrar_tropa('tropa8');?><br />
	Senadores: 	<input type="text" name="tropa_9" value="0" /> <?php $ald->mostrar_tropa('tropa9');?><br />
	Colonos: 	<input type="text" name="tropa_10" value="0" /> <?php $ald->mostrar_tropa('tropa10');?><br />

	<?php
	if (isset($_GET['x']) and isset($_GET['y']))
	{
	?>
		X <input type="text" name="x" value="<?php echo $_GET['x'];?>" required/>
		Y <input type="text" name="y" value="<?php echo $_GET['y'];?>" required/>
	<?php
	}
	else
	{
	?>
		X <input type="text" name="x" required/>
		Y <input type="text" name="y" required/>
	<?php
	}
	?>
	<br />
	Reforzar: <input type="radio" name="accion" value="reforzar" required/><br />
	<!--Atracar: <input type="radio" name="accion" value="atracar" /><br />-->
	Atacar: <input type="radio" name="accion" value="atacar" /><br />
	<br />
	<input type="submit" value="enviar">

</form>

</body>
</html>
