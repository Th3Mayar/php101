<?php

include_once("../php/plantilla_cabeza.php");

?>

<a href="./indexCondicionales.php">Atrás</a>
<h1>Trabajando con condicionales</h1>
<hr>
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
<header>
    <nav>
        <ol>
            <li><a href="1.php" class="boton">Juego de dados digital: Escriba un programa que cada vez que se ejecute muestre un valor entre 1 y 20 al azar</a></li>
            <li><a href="2.php" class="boton">Capturar nombre y genero de la persona</a></li>
            <li><a href="3.php" class="boton">Array que busque e imprima los dias de la semana del digito 0 al 6</a></li>
            <li><a href="4.php" class="boton">Realice un formulario que permita ingresar dos valores y la operación a realizar</a></li>
            <li><a href="5.php" class="boton">Realiza un formulario que permita identificar el monto a pagar de ITBIS con el total ingresado</a></li>
            <li><a href="6.php" class="boton">Programa que imprima una a tabla de los valores impares que existan entre un rango de datos previamente ingresados por el teclado</a></li>
            <li><a href="7.php" class="boton">Modificar el programa anterior ahora utilizando el ciclo while</a></li>
        </ol>
    </nav>
</header>

<br>
<br>
<br>

<?php 
include_once("../php/plantilla_pie.php")
?>