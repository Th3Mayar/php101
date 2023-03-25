<?php
include_once("../php101/php/plantilla_cabeza.php");
?>

<a href="./SEMANA02/indexCondicionales.php">Atrás</a>
<hr>
<h1>Condicionales Simples</h1>

<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <p>Edad: <input type="number" name="edad" id="edad" /></p>
    <p>Enviar: <input type="submit"/></p>
</form>
<hr>

<h2>Resultados:</h2>
<?php
if(isset ($_POST["edad"])){
$a = (int)$_POST['edad'];
if ($a >= 18){
    echo "Tu edad es $a eres mayor de edad";
}else{
    echo "Tu edad es $a eres menor de edad";
}
}
?>
<?php
    include_once("../php101/php/plantilla_pie.php");
?>