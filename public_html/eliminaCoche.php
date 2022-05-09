   
<?php
 include_once('misFunciones.php');
$mysqli = conectaBBDD();

$id_coche = isset($_POST['id_coche']) ? $_POST['id_coche'] : false;

  


$resultadoQuery = $mysqli->query("DELETE FROM coches WHERE id_coche='$id_coche'");

?>




