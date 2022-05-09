   
<?php

include_once('misFunciones.php');
$mysqli = conectaBBDD();

$Titulo_coche = isset($_POST['Titulo_coche']) ? $_POST['Titulo_coche'] : "";
$Año = isset($_POST['Año']) ? $_POST['Año'] : "";
$Motor = isset($_POST['Motor']) ? $_POST['Motor'] : "";
$CV = isset($_POST['CV']) ? $_POST['CV'] : "";
$Cambio = isset($_POST['Cambio']) ? $_POST['Cambio'] : "";
$Combustible = isset($_POST['Combustible']) ? $_POST['Combustible'] : "";
$KM = isset($_POST['KM']) ? $_POST['KM'] : "";
$Precio = isset($_POST['Precio']) ? $_POST['Precio'] : "";
$estado = isset($_POST['Estado']) ? $_POST['Estado'] : "";
$Observaciones = isset($_POST['Observaciones']) ? $_POST['Observaciones'] : "";
$foto1 = isset($_POST['foto1']) ? $_POST['foto1'] : "";
$foto2 = isset($_POST['foto2']) ? $_POST['foto2'] : "";
$foto3 = isset($_POST['foto3']) ? $_POST['foto3'] : "";
$foto4 = isset($_POST['foto4']) ? $_POST['foto4'] : "";
$foto5 = isset($_POST['foto5']) ? $_POST['foto5'] : "";
$foto6 = isset($_POST['foto6']) ? $_POST['foto6'] : "";
$foto7 = isset($_POST['foto7']) ? $_POST['foto7'] : "";
$foto8 = isset($_POST['foto8']) ? $_POST['foto8'] : "";
$foto9 = isset($_POST['foto9']) ? $_POST['foto9'] : "";
$foto10 = isset($_POST['foto10']) ? $_POST['foto10'] : "";
$foto11 = isset($_POST['foto11']) ? $_POST['foto11'] : "";
$foto12 = isset($_POST['foto12']) ? $_POST['foto12'] : "";




$resultadoQuery = $mysqli->query("INSERT INTO coches VALUES (NULL, '$Titulo_coche', '$Año', '$Motor', '$CV', '$Cambio', '$Combustible', '$KM','$Observaciones', '$estado' , '$Precio', '$foto1', '$foto2', '$foto3', '$foto4', '$foto5', '$foto6', '$foto7', '$foto8', '$foto9', '$foto10', '$foto11', '$foto12')"); 


?>




