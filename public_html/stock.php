<html>
    <head>
        <title>GMOTOR || VEHÍCULOS EN STOCK</title>
        
        <!-- Meta TAGS -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Gonzalo Izuzquiza && Alejandro Lago">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
                       

    </head>
    <body>
        
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" id="men">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">GAUTOMOTOR</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="stock.php">VEHÍCULOS EN STOCK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tasacion.php">TASACIÓN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.html">SERVICIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Main -->
                <section id="main">
                    <div class="container">
                        <div class="row">
                            <!-- Portfolio -->
                            <section>
                                <header class="major">
                                    <h2>VEHÍCULOS EN STOCK</h2>
                                </header>
                                <div class="row">
                                    <?php
                                    include ('misFunciones.php');
                                    $mysqli = conectaBBDD();
                                    $resultadoQuery = $mysqli->query("SELECT * FROM coches ORDER BY Titulo_coche ASC");
                                    $coches_cajas = $resultadoQuery->num_rows;
                                    for ($i = 0; $i < $coches_cajas; $i++) {
                                        $registro = $resultadoQuery->fetch_array();
                                        $imagen = $registro['foto1'];
                                        $imagen2 = $registro['foto2'];
                                        $imagen3 = $registro['foto3'];
                                        $imagen4 = $registro['foto4'];
                                        $imagen5 = $registro['foto5'];
                                        $imagen6 = $registro['foto6'];
                                        $imagen7 = $registro['foto7'];
                                        $imagen8 = $registro['foto8'];
                                        $imagen9 = $registro['foto9'];
                                        $imagen10 = $registro['foto10'];
                                        $imagen11 = $registro['foto11'];
                                        $imagen12 = $registro['foto12'];
                                        $marca = trim(preg_replace('/\s\s+/', ' ', $registro['Titulo_coche']));  //esto es para limpiar de retornos de línea lo que tienes en la BBDD
                                        $anno = trim(preg_replace('/\s\s+/', ' ', $registro['Año']));
                                        $motor = trim(preg_replace('/\s\s+/', ' ', $registro['Motor']));
                                        $cv = trim(preg_replace('/\s\s+/', ' ', $registro['CV']));
                                        $cambio = trim(preg_replace('/\s\s+/', ' ', $registro['Cambio']));
                                        $combustible = trim(preg_replace('/\s\s+/', ' ', $registro['Combustible']));
                                        $km = trim(preg_replace('/\s\s+/', ' ', $registro['KM']));
                                        $precio = trim(preg_replace('/\s\s+/', ' ', $registro['Precio']));
                                        $estado = trim(preg_replace('/\s\s+/', ' ', $registro['Estado']));
                                        $observacion = trim(preg_replace('/\s\s+/', ' ', $registro['Observaciones']));
                                        $info_rapida = '<strong> AÑO: ' . $registro['Año'] . '</strong> <br><strong>KM: ' . $registro['KM'] . '</strong>  <br><strong>PRECIO: ' . $registro['Precio'] . '</strong><br>';
                                        if($estado == "DISPONIBLE"){
                                           $color = "green" ; 
                                        }elseif($estado == "VENDIDO"){
                                            $color = "red";
                                        } elseif ($estado == "RESERVADO") {
                                            $color = "orange";
                                    }
                                        
                                        ?><div class="col-4 col-6-medium col-12-small">
                                            <section class="box">
                                                <a class="image featured"><img src="images/coches/<?php echo $imagen ?>" alt="" /></a>
                                                <header>
                                                    <h5><strong><?php echo $marca ?></strong></h5>
                                                </header>
                                                <p><?php echo $info_rapida ?></p>
                                                <p><strong><font color="<?php echo $color?>"><?php echo $estado ?></font></strong></p>
                                                <footer>
                                                    <ul class="actions">
                                                        <li><a  onclick="verMas('<?php echo $imagen ?>',
                                                                        '<?php echo $imagen2 ?>',
                                                                        '<?php echo $imagen3 ?>',
                                                                        '<?php echo $imagen4 ?>',
                                                                        '<?php echo $imagen5 ?>',
                                                                        '<?php echo $imagen6 ?>',
                                                                        '<?php echo $imagen7 ?>',
                                                                        '<?php echo $imagen8 ?>',
                                                                        '<?php echo $imagen9 ?>',
                                                                        '<?php echo $imagen10 ?>',
                                                                        '<?php echo $imagen11 ?>',
                                                                        '<?php echo $imagen12 ?>',
                                                                        '<?php echo $marca ?>',
                                                                        '<?php echo $anno ?>',
                                                                        '<?php echo $motor ?>',
                                                                        '<?php echo $cv ?>',
                                                                        '<?php echo $cambio ?>',
                                                                        '<?php echo $combustible ?>',
                                                                        '<?php echo $km ?>',
                                                                        '<?php echo $precio ?>',
                                                                        '<?php echo $observacion ?>'
                                                                        );" class="button alt">Ver más sobre el coche</a></li>
                                                    </ul>
                                                </footer>
                                            </section>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
        
        
         
            <div id="pie2" class="container">
                <ul id="bajo">
                    <li><a href="" target="_blank">AVISO LEGAL</a></li>
                    <li><a href="" target="_blank">LOPD</a></li>
                    <li>© 2022 GAUTO</li>
                </ul>
            </div>
                       
        
        
    <!-- SCRIPTS -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
        <script src="js/cookies.js" type="text/javascript"></script>    
    <!-- Bootstrap Bundle with Popper -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
          <script>
                                                        function verMas(_imagen, _imagen2, _imagen3, _imagen4, _imagen5, _imagen6, _imagen7, _imagen8, _imagen9, _imagen10, _imagen11, _imagen12,
                                                                _marca, _anno, _motor, _cv, _cambio, _combustible, _km, _precio, _observacion) {
                                                            $('#carouselExampleSlidesOnly').carousel({
                                                                interval: true,
                                                                pause: false
                                                            }).carousel(0);
                                                            $('#imagenCoche').attr("src", "img/coches/" + _imagen);
                                                            $('#imagenCoche1').attr("src", "img/coches/" + _imagen2);
                                                            $('#imagenCoche2').attr("src", "img/coches/" + _imagen3);
                                                            $('#imagenCoche3').attr("src", "img/coches/" + _imagen4);
                                                            $('#imagenCoche4').attr("src", "img/coches/" + _imagen5);
                                                            $('#imagenCoche5').attr("src", "img/coches/" + _imagen6);
                                                            $('#imagenCoche6').attr("src", "img/coches/" + _imagen7);
                                                            $('#imagenCoche7').attr("src", "img/coches/" + _imagen8);
                                                            $('#imagenCoche8').attr("src", "img/coches/" + _imagen9);
                                                            $('#imagenCoche9').attr("src", "img/coches/" + _imagen10);
                                                            $('#imagenCoche10').attr("src", "img/coches/" + _imagen11);
                                                            $('#imagenCoche11').attr("src", "img/coches/" + _imagen12);
                                                            $('#marca').text(_marca);
                                                            $('#anno').text(_anno);
                                                            $('#motor').text(_motor);
                                                            $('#cv').text(_cv);
                                                            $('#cambio').text(_cambio);
                                                            $('#combustible').text(_combustible);
                                                            $('#km').text(_km);
                                                            $('#precio').text(_precio);
                                                            $('#observacion').text(_observacion);
                                                            $('#modalCoches').modal('show');
                                                        }
        </script>

        <!-- MODAL PARA MOSTRAR LA FICHA DEL COCHE -->

        <div id="modalCoches" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg " style="width: 90%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ficha del vehículo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span id="ocultar" aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div id="infoDelCoche" >
                            <!--<a class="image featured"><img id="imagenCoche" alt="" /></a>-->
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" id="imagenCoche" alt="">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche1">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche2">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche3">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche4">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche5">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche6">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche7">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche8">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche9">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche10">
                                    </div>
                                    <div class="carousel-item" alt="">
                                        <img class="d-block w-100" id="imagenCoche11">
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="4"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="5"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="6"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="7"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="8"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="9"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="10"></li>
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="11"></li>
                                    </ol>
                                    <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </div>
                                <table class="table table-striped table-bordered" >
                                    <tr><td>Marca</td><td id="marca"></td></tr>
                                    <tr><td>Año</td><td id="anno"></td></tr>
                                    <tr><td>Motor</td><td id="motor"></td></tr>
                                    <tr><td>CV</td><td id="cv"></td></tr>
                                    <tr><td>Cambio</td><td id="cambio"></td></tr>
                                    <tr><td>Combustible</td><td id="combustible"></td></tr>
                                    <tr><td>KM</td><td id="km"></td></tr>
                                    <tr><td>Precio</td><td id="precio"></td></tr>
                                    <tr><td>Observaciones</td><td id="observacion"></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                           <!-- <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:window.print()" >Imprimir</button> -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal" >Salir</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        
    </body>
</html>
