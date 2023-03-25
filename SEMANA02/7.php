<?php
include_once("../php/plantilla_cabeza.php");
?>

<a href="./indexEjercicios.php">Atrás</a>
<hr>

<h1 style="color:darkcyan">Modificar el programa anterior ahora utilizando el ciclo while</h1>

<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
    <p>Rango Inicial: <input type="number" name="inicio" id="inicio"/></p>
    <p>Rango Final: <input type="number" name="fin" id="fin"/></p>
	<input type="submit" value="enviar">
    <br>
</form>
    <table class="table">
        <thead>
            <th></th>
        </thead>

<?php
if(isset ($_POST["inicio"])){

$inicio = $_POST["inicio"];
$fin = $_POST["fin"];
$i = $inicio;

while ($i <= $fin){
    if ($i % 2 == 1) {
        echo "<table style='border:1px solid #000'>";
            echo "<tr>";
                echo "<td style='border:1px solid #000'>$i</td>";
            echo "</tr>";
        echo "</table>";
    }
    $i++;
    }
}
?>

<?php 
include_once("../php/plantilla_pie.php")
?>