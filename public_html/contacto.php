<html>
    <head>
        <title>GMOTOR || CONTACTO</title>
        
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
                            <a class="nav-link" href="stock.php">VEHÍCULOS EN STOCK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tasacion.php">TASACIÓN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.html">SERVICIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Main -->
            <section id="main">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-12-medium">
                            <!-- Content -->
                            
                            <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3031.5256783431564!2d-3.6152230846496796!3d40.552067255321354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422d1a3c28fa67%3A0x30a79e3373ed7937!2sAv.+Camino+de+lo+Cortao%2C+24%2C+28703+San+Sebasti%C3%A1n+de+los+Reyes%2C+Madrid!5e0!3m2!1ses!2ses!4v1542306936412" width="450" height="300" frameborder="0" allowfullscreen> </iframe> -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12132.044769484186!2d-3.6561711!3d40.5192437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11b915f1a527fb3e!2sMoraleja+Green!5e0!3m2!1ses!2s!4v1559119728551!5m2!1ses!2s" width="450" height="300" frameborder="0" allowfullscreen></iframe>
                                <br>
                                <br>
                                
                                        <h2><strong>Contacto</strong></h2><br>
                                        <p>Pablo Reguero</p>
                                       <!-- <p>Avenida Camino de lo Cortao 24, 28703 San Sebastián de los Reyes</p> -->
                                       <p>Moraleja Green - Centro Comercial </p>
                                        <p>Av. de Europa, 13 - 15, 28108 Alcobendas, Madrid </p>
                                        <p>Planta -1 </p>
                                        <p>Tel: 603 257 073</p>
                                    
                            <br>
                            <br>
                            <input type="button" onclick="contacto()" value="CONTACTA CON NOSOTROS">
                        </div>
                    </div>
                </div>
        </div>
        <div id="cargaEmail"></div>
                      
                 
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
                                function contacto() {
                                    $('#Contacta').modal('show');
                                }
                                function datosCorreo(){
                                    var _nombre = $('#nombre').val();
                                    var _email = $('#email').val();
                                    var _tema = $('#tema').val();
                                    var _mensaje = $('#mensaje').val();
                                    $("#Contacta").load('enviaMail.php',{
                                        nombre : _nombre,
                                        email : _email,
                                        tema : _tema,
                                        mensaje : _mensaje
                                    });
                                }
        </script>
        
        <div id="Contacta" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg " style="width: 90%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Contacta con nosotros</h4>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span id="ocultar" aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="formularioContacto" >
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td>Nombre *</td>
                                    <td><input id="nombre" type="text" placeholder=" Introduce tu nombre"></td>
                                </tr>
                                <tr>
                                    <td>Email *</td>
                                    <td><input id="email" type="text" placeholder=" Introduce tu email"></td>
                                </tr>
                                <tr>
                                    <td>Tema *</td>
                                    <td><input id="tema" type="text" placeholder=" Motivo del contacto"></td>
                                </tr>
                                <tr>
                                    <td>Mensaje *</td>
                                    <td><textarea id="mensaje" placeholder=" Mensaje"></textarea></td>
                                </tr>
                            </table>  
                        </div>
                        <div class="modal-footer">
                            <strong>* CAMPOS OBLIGATORIOS</strong>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="datosCorreo()" >Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
