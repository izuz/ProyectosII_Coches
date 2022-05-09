   
<?php
include_once('misFunciones.php');
$mysqli = conectaBBDD();
$resultadoQuery = $mysqli->query("SELECT * FROM coches ORDER BY Titulo_coche ASC");
$registro = $resultadoQuery->num_rows;
for ($i = 0; $i < $registro; $i++) {
    $marca = $registro['Titulo_coche'];
    $anno = $registro['Año'];
    $motor = $registro['Motor'];
    $cv = $registro['CV'];
    $cambio = $registro['Cambio'];
    $combustible = $registro['Combustible'];
    $km = $registro['KM'];
    $precio = $registro['Precio'];
    $estado = $registro['Estado'];
    $observacion = $registro['Observaciones'];
    $foto1 = $registro['foto1'];
    $foto2 = $registro['foto2'];
    $foto3 = $registro['foto3'];
    $foto4 = $registro['foto4'];
    $foto5 = $registro['foto5'];
    $foto6 = $registro['foto6'];
    $foto7 = $registro['foto7'];
    $foto8 = $registro['foto8'];
    $foto9 = $registro['foto9'];
    $foto10 = $registro['foto10'];
    $foto11 = $registro['foto11'];
    $foto12 = $registro['foto12'];
}
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    </head>
    <body>

        <h1>MODIFICAR LOS DATOS</h1>
        <input type="button" onclick="insertarCoche();" value="INSERTAR NUEVO COCHE">

<table class="table table-striped table-bordered table-hover table-sm " border="2px" align="center">
    <thead class="thead-dark">
        <tr width="70%">
            <th>Borrar</th>
            <th>ID</th>
            <th>Marca</th>
            <th>Año</th>
            <th>Motor</th>
            <th>CV</th>
            <th>Cambio</th>
            <th>Combustible</th>
            <th>KM</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>Foto 1</th>
            <th>Foto 2</th>
            <th>Foto 3</th>
            <th>Foto 4</th>
            <th>Foto 5</th>
            <th>Foto 6</th>
            <th>Foto 7</th>
            <th>Foto 8</th>
            <th>Foto 9</th>
            <th>Foto 10</th>
            <th>Foto 11</th>
            <th>Foto 12</th>
        </tr>
    </thead>
    <?php
    while ($registro = $resultadoQuery->fetch_array()) {
        $coche = $registro['id_coche'];
        echo'
        <tr id ="fila' . $coche . '">
            <td ><i class="far fa-trash-alt" onclick="borraCoche(' . $coche . ')"></i></td>
            <td title="' . $coche . '">' . $coche . '</td>
            <td class="editable"  title="' . $coche . '"><input                           id="Titulo_coche' . $coche . '"  type="text" value="' . $registro['Titulo_coche'] . '"></td>
            <td class="editable"  title="' . $coche . '"><input style="max-width: 50px;"  id="Año' . $coche . '"  type="text" value="' . $registro['Año'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input style="max-width: 100px;" id="Motor' . $coche . '"  type="text" value="' . $registro['Motor'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input style="max-width: 50px;"  id="CV' . $coche . '"  type="text" value="' . $registro['CV'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input style="max-width: 80px;"  id="Cambio' . $coche . '"  type="text" value="' . $registro['Cambio'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input style="max-width: 80px;"  id="Combustible' . $coche . '"  type="text" value="' . $registro['Combustible'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input style="max-width: 80px;"  id="KM' . $coche . '"  type="text" value="' . $registro['KM'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input style="max-width: 80px;"  id="Precio' . $coche . '"  type="text" value="' . $registro['Precio'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="Estado' . $coche . '"  type="text" value="' . $registro['Estado'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="Observaciones' . $coche . '"  type="text" value="' . $registro['Observaciones'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto1' . $coche . '" type="text" value="' . $registro['foto1'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto2' . $coche . '" type="text" value="' . $registro['foto2'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto3' . $coche . '" type="text" value="' . $registro['foto3'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto4' . $coche . '" type="text" value="' . $registro['foto4'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto5' . $coche . '" type="text" value="' . $registro['foto5'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto6' . $coche . '" type="text" value="' . $registro['foto6'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto7' . $coche . '" type="text" value="' . $registro['foto7'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto8' . $coche . '" type="text" value="' . $registro['foto8'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto9' . $coche . '" type="text" value="' . $registro['foto9'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto10' . $coche . '" type="text" value="' . $registro['foto10'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto11' . $coche . '" type="text" value="' . $registro['foto11'] . '"</td>
            <td class="editable"  title="' . $coche . '"><input                           id="foto12' . $coche . '" type="text" value="' . $registro['foto12'] . '"</td>
        </tr>';
    }
    ?>
</table>
<div id="cambiaCoche"></div>
</body>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script>

            $('.editable').focusout(function () {
                var _id_coche = $(this).attr("title");
                var _Titulo_coche = $('#Titulo_coche' + _id_coche).val();
                var _Año = $('#Año' + _id_coche).val();
                var _Motor = $('#Motor' + _id_coche).val();
                var _CV = $('#CV' + _id_coche).val();
                var _Cambio = $('#Cambio' + _id_coche).val();
                var _Combustible = $('#Combustible' + _id_coche).val();
                var _KM = $('#KM' + _id_coche).val();
                var _Precio = $('#Precio' + _id_coche).val();
                var _Estado = $('#Estado' + _id_coche).val();
                var _Observaciones = $('#Observaciones' + _id_coche).val();
                var _foto1 = $('#foto1' + _id_coche).val();
                var _foto2 = $('#foto2' + _id_coche).val();
                var _foto3 = $('#foto3' + _id_coche).val();
                var _foto4 = $('#foto4' + _id_coche).val();
                var _foto5 = $('#foto5' + _id_coche).val();
                var _foto6 = $('#foto6' + _id_coche).val();
                var _foto7 = $('#foto7' + _id_coche).val();
                var _foto8 = $('#foto8' + _id_coche).val();
                var _foto9 = $('#foto9' + _id_coche).val();
                var _foto10 = $('#foto10' + _id_coche).val();
                var _foto11 = $('#foto11' + _id_coche).val();
                var _foto12 = $('#foto12' + _id_coche).val();

                $("#cambiaCoche").load('actualizaCoche.php', {
                    id_coche: _id_coche,
                    Titulo_coche: _Titulo_coche,
                    Año: _Año,
                    Motor: _Motor,
                    CV: _CV,
                    Cambio: _Cambio,
                    Combustible: _Combustible,
                    KM: _KM,
                    Precio: _Precio,
                    Estado: _Estado,
                    Observaciones: _Observaciones,
                    foto1: _foto1,
                    foto2: _foto2,
                    foto3: _foto3,
                    foto4: _foto4,
                    foto5: _foto5,
                    foto6: _foto6,
                    foto7: _foto7,
                    foto8: _foto8,
                    foto9: _foto9,
                    foto10: _foto10,
                    foto11: _foto11,
                    foto12: _foto12


                });
            })

            function borraCoche(_id_coche) {
                if (confirm('SE BORRARÁ el coche de la lista, ¿ESTAS SEGURO?')) {
                    $("#cambiaCoche").load('eliminaCoche.php', {
                        id_coche: _id_coche
                    });
                    $("#fila" + _id_coche).hide();
                } else {
                    // Do nothing!
                }
            }

            function insertarCoche() {
                $('#insercionCoches').modal('show');
            }

            function insertaCocheEnlaBBDD() {
                var _Titulo_coche = $('#Titulo_coche').val();
                var _Año = $('#Año').val();
                var _Motor = $('#Motor').val();
                var _CV = $('#CV').val();
                var _Cambio = $('#Cambio').val();
                var _Combustible = $('#Combustible').val();
                var _KM = $('#KM').val();
                var _Precio = $('#Precio').val();
                var _Estado = $('#Estado').val();
                var _Observaciones = $('#Observaciones').val();
                var _foto1 = $('#foto1').val();
                var _foto2 = $('#foto2').val();
                var _foto3 = $('#foto3').val();
                var _foto4 = $('#foto4').val();
                var _foto5 = $('#foto5').val();
                var _foto6 = $('#foto6').val();
                var _foto7 = $('#foto7').val();
                var _foto8 = $('#foto8').val();
                var _foto9 = $('#foto9').val();
                var _foto10 = $('#foto10').val();
                var _foto11 = $('#foto11').val();
                var _foto12 = $('#foto12').val();

                $("#cambiaCoche").load('insertaCoche.php', {
                    Titulo_coche: _Titulo_coche,
                    Año: _Año,
                    Motor: _Motor,
                    CV: _CV,
                    Cambio: _Cambio,
                    Combustible: _Combustible,
                    KM: _KM,
                    Precio: _Precio,
                    Estado: _Estado,
                    Observaciones: _Observaciones,
                    foto1: _foto1,
                    foto2: _foto2,
                    foto3: _foto3,
                    foto4: _foto4,
                    foto5: _foto5,
                    foto6: _foto6,
                    foto7: _foto7,
                    foto8: _foto8,
                    foto9: _foto9,
                    foto10: _foto10,
                    foto11: _foto11,
                    foto12: _foto12
                });
                $('#insercionCoches').modal('hide');
                
            }

            $()</script>

<!-- MODAL PARA MOSTRAR LA INSERCIÓN DEL COCHE -->

<div id="insercionCoches" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " style="width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title2">Insertar nuevo vehículo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span id="ocultar" aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <div id="Coche" >
                    <table class="table table-striped table-bordered" >
                        <tr><td class="tabla">Marca</td><td><input type="text" id="Titulo_coche" width="60px"></td></tr>
                        <tr><td class="tabla">Año</td><td><input type="text" id="Año"></td></tr>
                        <tr><td class="tabla">Motor</td><td><input type="text" id="Motor"></td></tr>
                        <tr><td class="tabla">CV</td><td><input type="text" id="CV"></td></tr>
                        <tr><td class="tabla">Cambio</td><td><input type="text" id="Cambio"></td></tr>
                        <tr><td class="tabla">Combustible</td><td><input type="text" id="Combustible"></td></tr>
                        <tr><td class="tabla">KM</td><td><input type="text" id="KM"></td></tr>
                        <tr><td class="tabla">Precio</td><td><input type="text" id="Precio"></td></tr>
                        <tr><td class="tabla">Estado</td><td><input type="text" id="Estado" value="DISPONIBLE"></td></tr>
                        <tr><td class="tabla">Observaciones</td><td><input type="text" id="Observaciones" value="PRECIO AL CONTADO. Incluye la transferencia y la garantía."></td></tr>
                        <tr><td class="tabla">Foto principal</td><td><input type="text" id="foto1"></td></tr>
                        <tr><td class="tabla">Foto 2</td><td><input type="text" id="foto2"></td></tr>
                        <tr><td class="tabla">Foto 3</td><td><input type="text" id="foto3"></td></tr>
                        <tr><td class="tabla">Foto 4</td><td><input type="text" id="foto4"></td></tr>
                        <tr><td class="tabla">Foto 5</td><td><input type="text" id="foto5"></td></tr>
                        <tr><td class="tabla">Foto 6</td><td><input type="text" id="foto6"></td></tr>
                        <tr><td class="tabla">Foto 7</td><td><input type="text" id="foto7"></td></tr>
                        <tr><td class="tabla">Foto 8</td><td><input type="text" id="foto8"></td></tr>
                        <tr><td class="tabla">Foto 9</td><td><input type="text" id="foto9"></td></tr>
                        <tr><td class="tabla">Foto 10</td><td><input type="text" id="foto10"></td></tr>
                        <tr><td class="tabla">Foto 11</td><td><input type="text" id="foto11"></td></tr>
                        <tr><td class="tabla">Foto 12</td><td><input type="text" id="foto12"></td></tr>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="insertaCocheEnlaBBDD()">Insertar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


</html>



