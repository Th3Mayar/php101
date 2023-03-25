<?php
include_once("../php/plantilla_cabeza.php");
?>

<a href="./indexEjercicios.php">Atrás</a>
<hr>

<head>
    <style>
        h4{
            width:120px;
            background:#F5F5F5;
            border:#999 2px solid;
            font-size:100px;
            text-align:center;
            margin:5px;
            margin-top:10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<h1 style="color:darkcyan">Juego de dados digital</h1>

<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <button type="submit">Lanzar Dado</button>
</form>

<br>

<?php
function lanzarDado() {    
    $valor = rand (1,6);
    return $valor;
} 

echo "El dado lanzado ha caido en: <h4>" . lanzarDado() . "</h4>";
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include_once("../php/plantilla_pie.php")
?>