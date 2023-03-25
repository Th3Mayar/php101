<?php

include_once("../php/plantilla_cabeza.php");

?>

<a href="./indexCondicionales.php">Atrás</a>
<h1>Trabajando con ciclos</h1>
<hr>

<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <p>Digite su nombre: <input type="text" name="name"></p>
    <button type="submit">Enviar</button>
</form>

<br>

<?php
$a = 1;
if (isset($_POST['name'])){
    $nombre = ($_POST['name']);
        while($a <= 10){
            echo "<p>$a - El valor introducido es: <b style='color:red'>$nombre</b></p>";
            $a++;
        }
}
?>

<?php 
include_once("../php/plantilla_pie.php")
?>