<?php

include_once("../php/plantilla_cabeza.php");

?>

<head>
    <style>
        header nav ol li{
            text-decoration: none;
        }

        .boton{
            text-decoration: none;
            border: 2px solid darkcyan;
            color: #000;
            margin-top: 10px;
            padding: 10px 10px;
            text-align: left;
            margin-right:440px;
            display: block;
            font-size: 16px;
        }

        .boton:hover{
            border: 2px solid #000;
            transition-duration: 0.4s;
            background-color: darkcyan;
            color: white;
        }

        .boton:active {
            color:#000;
            border: 2px solid darkcyan;
            background-color: #fff;
            box-shadow: 0 5px #f2f2f2;
            transform: translateY(1px);
        }
    </style>
</head>

<a href="../index.php">Atrás</a>
<h1>Trabajando con funciones</h1>
<hr>

<ul>
    <li><a href="../SEMANA03/ejemploFuncion.php" class="boton">Ejemplo 01 - Funciones</a></li>
    <li><a href="../SEMANA03/calc.php" class="boton">Ejercicios de SEMANA03</a></li>
</ul>

<?php 
include_once("../php/plantilla_pie.php")
?>
