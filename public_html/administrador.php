<?php

//Comprueba si la sesión está empezada.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['id_usuario'])) {
    echo "<script type='text/javascript'>location.href='https://gautomotor.000webhostapp.com/modificar_datos.php'</script>";
}

session_start();  //inicia la sesión del navegador en el servidor PHP
                  //o la continúa si ya estuviera iniciada
include './misFunciones.php';

function limpiaPalabra($palabra){
    //filtro muy básico para evitar la inyeccion SQL
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, '"');
    return $palabra;
}

$mysqli = conectaBBDD();
$cajaNombre = limpiaPalabra($_POST['cajaNombre']);
 
$cajaPassword = limpiaPalabra($_POST['cajaPassword']);

 $resultadoQuery = $mysqli -> query("SELECT * FROM usuarios WHERE id_usuario='$cajaNombre' ");
 $numUsuarios = $resultadoQuery -> num_rows;
 if ($numUsuarios > 0){
     $r = $resultadoQuery -> fetch_array();
     //TODO : hay que encriptar las contraseñas en la BBDD
     //if (password_verify($cajaPassword, $r['contraseña'])){
     if ($cajaPassword == $r['contraseña']){
        //en la variable de sesión "nombreUsuario" guardo el nombre de usuario
        $_SESSION['id_usuario'] = $cajaNombre;
        //en la variable de sesión idUsuario guardo el id de usuario leido de la BBDD
        $_SESSION['id_usuario'] = $r['id_usuario'];
        //muestro la pantalla de la aplicación       
        require 'modificar_datos.php';
    }
    else {
        //muestro una pantalla de error porque la contraseña está mal
        echo '<script> alert("El usuario y/o constraseña es incorrecto");</script>';
        echo '<meta http-equiv="refresh" content="0">';
    }
 }
    else {
        //muestro una pantalla de error porque el nombre de usuario está mal
       echo '<script> alert("El usuario y/o constraseña es incorrecto");</script>';
       echo '<meta http-equiv="refresh" content="0">';
    }