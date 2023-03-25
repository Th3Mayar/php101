<?php

    include_once("../php/plantilla_cabeza.php");

?>

<a href="./indexCiclos.php">Atrás</a>
<hr>

<h1 style="color:darkcyan">Trabajando con funciones</h1>

<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
    <p>Ingrese el Nombre: <input type="text" name="nombre" id="nombre"/></p>
    <p>Ingrese el Apellido: <input type="text" name="apellido" id="apellido"/></p>
    <select name="sexo" id="sexo">
		</option>
		<option value="masculino">Masculino
		</option>
		<option value="femenino">Femenino
		</option>
	</select>
    <p><input type="submit"></p>
</form>

<hr>

<h2>Resultados</h2>

    <?php
        if(isset ($_POST["nombre"])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $sexo = $_POST['sexo'];
            function fSaludo($nombre, $apellido, $sexo){
                if ($sexo == 'masculino'){
                    echo "Buenos dias Sr. $nombre $apellido"; 
                }else{
                    echo "Buenos dias Sra. $nombre $apellido";
                }
            }
            fSaludo($nombre, $apellido, $sexo);
        }
    ?>
<?php

    include_once("../php/plantilla_pie.php");

?>

