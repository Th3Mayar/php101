<?php
include_once("../php/plantilla_cabeza.php");
?>

<a href="./indexEjercicios.php">Atrás</a>
<hr>

<h1 style="color:darkcyan">Capturar nombre y genero de la persona</h1>

<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <p>Nombre: <input type="text" name="nombre" id="nombre" /></p>
    <P>Sexo:<br><br> 
    <select name="Op">
		</option>
		<option value="masculino">Masculino
		</option>
		<option value="femenino">Femenino
		</option>
	</select>
    <p>Loguearse: <input type="submit"/></p>
</form>

<?php
if(isset ($_POST["Op"])){
$vOp = ($_POST['Op']);
$vNombre = $_POST['nombre'];

if ($vOp == 'masculino'){
    echo "Buenos dias Sr. $vNombre";

}else{
    echo "Buenos dias Sra. $vNombre";
}
}
?>

<?php 
include_once("../php/plantilla_pie.php")
?>