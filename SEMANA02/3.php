<?php
include_once("../php/plantilla_cabeza.php");
?>

<a href="./indexEjercicios.php">Atrás</a>
<hr>

<h1 style="color:darkcyan">Dias de la semana del digito 0 al 6</h1>

<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <p>Digite un valor: <input type="number" name="digito" id="digito"/></p>
    <button type="submit">Verificar</button>
</form>

<br>

<?php
if(isset ($_POST["digito"])){
$vDigito = $_POST['digito'];
$vArg = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

if ($vDigito == 0){
    echo "$vArg[0]";
}
else if ($vDigito == 1){
    echo "$vArg[1]";
}
else if ($vDigito == 2){
    echo "$vArg[2]";
}
else if ($vDigito == 3){
    echo "$vArg[3]";
}
else if ($vDigito == 4){
    echo "$vArg[4]";
}
else if ($vDigito == 5){
    echo "$vArg[5]";
}
else if ($vDigito == 6){
    echo "$vArg[6]";
}
else if ($vDigito > 6){
    echo "Te has excedido";
}
else{
    echo "Recuerda que es del 0 al 6!";
}
}
?>

<?php 
include_once("../php/plantilla_pie.php")
?>