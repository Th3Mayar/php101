<?php
include_once("../php/plantilla_cabeza.php");
?>

<a href="./indexCiclos.php">Atrás</a>
<hr>
<h1 style="color:darkcyan">Formulario que permita ingresar dos valores y la operación a realizar</h1>

<h4>Realice suma, resta multiplicacion y division</h4>
    <ul>
        <li>Campo select la operacion</li>
        <li>Boton que diga submit</li> 
        <li>Imprimir el resultado de la operacion</li>
    </ul>

<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
    <p>Valor uno: <input type="number" name="digito1" id="digito1"/></p>
    <p>Valor dos: <input type="number" name="digito2" id="digito2"/></p>
		<select name="Op">
			<option value="suma">Suma
			</option>
			<option value="resta">Resta
			</option>
			<option value="multiplicacion">Multiplicacion
			</option>
			<option value="division">Division
			</option>
		</select>
		<input type="submit" value="enviar">
    <br>
</form>

<br>

<?php
if(isset ($_POST["digito1"])){

    $vnum1 = (int)$_POST['digito1'];
    $vnum2 = (int)$_POST['digito2'];

    function fSuma($vnum1, $vnum2){
        echo "$vnum1 + $vnum2 = ", $vnum1+$vnum2;
    }

    function fResta($vnum1, $vnum2){
        echo "$vnum1 - $vnum2 = ", $vnum1-$vnum2;
    }

    function fMultiplicacion($vnum1, $vnum2){
        echo "$vnum1 * $vnum2 = ", $vnum1*$vnum2;
    }

    function fDivision($vnum1, $vnum2){

        if ($vnum2 == 0){
            echo "$vnum1 / $vnum2 = INDETERMINADO";
            
        } else{
            echo "$vnum1 / $vnum2 = ", $vnum1/$vnum2;
        }
    }


    function fOpciones($vnum1, $vnum2){
        if ($_POST['Op'] == 'suma'){
            fSuma($vnum1, $vnum2);
        }

        else if ($_POST['Op'] == 'resta'){
            fResta($vnum1, $vnum2);
        }

        else if ($_POST['Op'] == 'multiplicacion'){
            fMultiplicacion($vnum1, $vnum2);
        }

        else if ($_POST['Op'] == 'division'){
            fDivision($vnum1, $vnum2);
        }
    }

    fOpciones($vnum1, $vnum2);
}
?>

<?php 
include_once("../php/plantilla_pie.php")
?>