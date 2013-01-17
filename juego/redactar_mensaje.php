<?php
require_once("class/class.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aldea</title>


<!-- Estilos CSS -->
<link rel="stylesheet" type="text/css" href="estilos/aldea.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
-->

</head>
<body>
<?php
$ald=new Aldea('no');
?>

<form name="enviar_mensaje" method="post" action="procesa_mensaje.php">

	<?php
	if (isset($_GET['usuario']))
	{
		?>
		Destinatario <input type="text" value="<?php echo $_GET['usuario'];?>" name="destinatario" required/><br/>
		<?php
	}
	else
	{
		?>
		Destinatario <input type="text" name="destinatario" required/><br/>
		<?php
	}
	?>
	Asunto <input type="text" name="asunto" required/><br/>
	Mensaje <textarea name="mensaje"></textarea><br />

	<input type="hidden" value="enviar" name="accion"/>
	<input type="submit" value="Enviar" />

</form>

</body>

</html>