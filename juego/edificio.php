<?php
require_once("class/class.php");
$ald=new Aldea();
$ald->comprobar_recursos('no');
$ciudad=$_SESSION['ju_ciudad'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET["edificio"];?></title>


<!-- Estilos CSS -->
<link rel="stylesheet" type="text/css" href="estilos/aldea.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
-->

</head>
<body onLoad="actualiza_recursos()">


<nav><p><a href="logout.php">Salir</a></p></nav>



<div id="wrap">



<div id="top">

    <div id="menu">

        <?php include("include/menu.php"); ?>

    </div>

</div>




<div id="bottom">

    <div id="left">
    	<?php include("include/left.php");?>
    </div>

    <div id="right">

        <div id="recursos">

        <?php include("include/recursos.php"); ?>

        </div>

        <div id="wrap_aldea">

        
        <div id="aldea">





<div id="wrapper_recursos">
<?php

if ($_GET['edificio']=='mercado')
{
	?>
	
	<div id="seccion_mercado">
	<div class="seccion_mercado" id="a_mercado1">Construir</div>
	<div class="seccion_mercado" id="a_mercado2">Comerciar</div>
	<div class="seccion_mercado" id="a_mercado3">Enviar recursos</div>
	<div class="seccion_mercado" id="a_mercado4">Ver ofertas</div>
	</div>


	<div id="intercambios" style="display:none;">
		Envios de la aldea:
		<div id="envios">

		</div>
		
		<div id="recibos">
		Envios a la aldea:

		</div>
	</div>
<?php
}
else if($_GET['edificio']=='cuartel')
{
?>	<div id="seccion_cuartel">
	<div class="seccion_mercado" id="a_cuartel1">Reclutar</div>
	<div class="seccion_mercado" id="a_cuartel2">Ataques</div>
	<div class="seccion_mercado" id="a_cuartel3">Tropas</div>
	</div>
	<br />
	<br />
	<?php
}

$ald->muestra_edificio($_GET['edificio']);
?>
</div><!--Wrapper_recursos-->


        
        </div>


            <div id="info_aldea">

                <?php include("include/produccion.php");?>

            </div>




        </div>



</div><!--Aldea-->


</div>



</div>
<?php
$ald->comprobar_recursos('no');
?>

</body>
</html>
