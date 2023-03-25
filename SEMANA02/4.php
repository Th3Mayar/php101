<?php
include_once("../php/plantilla_cabeza.php");
?>

<a href="./indexEjercicios.php">Atrás</a>
<hr>
<h1 style="color:darkcyan">Formulario que permita ingresar dos valores y la operación a realizar</h1>

<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
    <p>Valor uno: <input type="number" name="digito1" id="digito1"/></p>
    <p>Valor dos: <input type="number" name="digito2" id="digito2"/></p>
		<select name="Op">
			<option value="Suma">Suma
			</option>
			<option value="Resta">Resta
			</option>
			<option value="Multiplicacion">Multiplicacion
			</option>
			<option value="Division">Division
			</option>
		</select>
		<input type="submit" value="enviar">
    <br>
</form>

<br>

<?php
if(isset ($_POST["digito1"])){
$vValor1 = (int)$_POST['digito1'];
$vValor2 = (int)$_POST['digito2'];
$vOp = $_POST['Op'];

$vSuma = $vValor1+$vValor2;
$vResta = $vValor1-$vValor2;
$vMultiplicacion = $vValor1*$vValor2;
$vDivision = $vValor1/$vValor2;

if ($_POST['Op'] == 'Suma'){
    echo "$vValor1 + $vValor2 = $vSuma";
}
else if ($_POST['Op'] == 'Resta'){
    echo "$vValor1 - $vValor2 = $vResta";
}
else if ($_POST['Op'] == 'Multiplicacion'){
    echo "$vValor1 * $vValor2 = $vMultiplicacion";
}
else if ($_POST['Op'] == 'Division'){
    echo "$vValor1 / $vValor2 = $vDivision";
}
else if ($vValor2 == 0 && $_POST['Op'] == 'Division'){
    echo "No se puede dividir entre cero";
}
}
?>

<?php 
include_once("../php/plantilla_pie.php")
?>