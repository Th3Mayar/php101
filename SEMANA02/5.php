<?php
include_once("../php/plantilla_cabeza.php");
?>

<a href="./indexEjercicios.php">Atrás</a>
<hr>

<h1 style="color:darkcyan">Formulario que permita identificar el monto a pagar de ITBIS con el total ingresado</h1>

<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
    <p>Ingrese su monto: <input type="number" name="monto" id="monto"/></p>
		<select name="Op">
			<option value="ITBS1">0% No lleva ITBIS
			</option>
			<option value="ITBS2">16% de ITBIS
			</option>
			<option value="ITBS3">18% de ITBIS
			</option>
		</select>
		<input type="submit" value="enviar">
    <br>
</form>

<br>

<?php
if(isset ($_POST["monto"])){
$vMonto = (int)$_POST['monto'];
$vOp = $_POST['Op'];

if ($_POST['Op'] == 'ITBS1'){
    echo "Su monto a pagar es de: 0 pesos";
}
else if ($_POST['Op'] == 'ITBS2'){
    $vForm = $vMonto * 16 / 100;
    echo "Su monto a pagar es de: $vForm";
}
else if ($_POST['Op'] == 'ITBS3'){
    $vForm = $vMonto * 18 / 100;
    echo "Su monto a pagar es de: $vForm";
}
}
?>

<?php 
include_once("../php/plantilla_pie.php")
?>