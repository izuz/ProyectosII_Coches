<html>
    <head>
        <title>GMOTOR || TASACIÓN</title>
        
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
                            <a class="nav-link active" href="tasacion.php">TASACIÓN</a>
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
                        <div class="col-8 col-12-medium">
                            <h3><strong>Tasación del vehículo</strong></h3>
                            <p>Rellena el formulario y envíalo, te tasamos el vehículo.</p>
                            <div id="tasa">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <table>
                                        <tr>
                                            <td nowrap>
                                                <label for="nombre"> NOMBRE: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="nombre" maxlength="255" size="80" placeholder=" Introduce tu nombre y apellido" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="email"> E-MAIL: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="email" maxlength="255" size="80" placeholder=" Introduce tu email" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="telefono"> TELÉFONO: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="telefono" maxlength="255" size="80" placeholder=" Introduce tu telefono"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="marca_modelo">MARCA Y MODELO: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="marca_modelo" maxlength="255" size="80" placeholder=" Introduce la marca y modelo del vehículo"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="motorizacion"> MOTORIZACIÓN: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="motorizacion" maxlength="255" size="80" placeholder=" Introduce la motorización del vehículo"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="potencia">POTENCIA: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="potencia" maxlength="255" size="80" placeholder=" Introduce la potencia del vehículo"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="fecha_1ª_matriculacion">FECHA 1ª MATRICULACIÓN: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="fecha_1ª_matriculacion" maxlength="255" size="80" placeholder=" Introduce la fecha de la 1ª matriculación del vehículo"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="km_actuales">KILOMETROS ACTUALES: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="km_actuales" maxlength="255" size="80" placeholder=" Introduce los km actuales del vehículo"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="color">COLOR: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="color" maxlength="255" size="80" placeholder=" Introduce el color del vehículo"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="extras">EXTRAS: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="extras" maxlength="255" size="80" placeholder=" Introduce los extras del vehículo"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="libro_revisones">LIBRO DE REVISIONES SELLADO: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="libro_revisiones" maxlength="255" size="80" placeholder=" Introduce el libro de revisiones sellado del vehículo"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap>
                                                <label for="estado_general">ESTADO GENERAL: *</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="estado_general" maxlength="255" size="80" placeholder=" Introduce el estado del vehículo"/>
                                            </td>
                                        </tr>
<!--                                        <tr>
                                            <td nowrap>
                                                <label for="archivo">FOTOS:</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="file" name="attachment[]" multiple="multiple">
                                                <p>Para obtener una tasación más exacta, envia un correo a gauto@gmotor2015.net con las imágenes de su vehículo</p>
                                                <p>Asunto: Tasación </p>
                                            </td>
                                        </tr>-->
                                        <tr>
                                            <td nowrap>
                                                <label for="observaciones">OBSERVACIONES:</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea id="observaciones" placeholder="Introduce comentarios del vehículo"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="button" onclick="tasaCoche()" value="Enviar"/>
                                                <strong>CAMPOS OBLIGATORIOS *</strong>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
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
                                                    function tasaCoche() {
                                                        var _nombre = $('#nombre').val();
                                                        var _email = $('#email').val();
                                                        var _telefono = $('#telefono').val();
                                                        var _marca_modelo = $('#marca_modelo').val();
                                                        var _motorizacion = $('#motorizacion').val();
                                                        var _potencia = $('#potencia').val();
                                                        var _fecha_1ª_matriculacion = $('#fecha_1ª_matriculacion').val();
                                                        var _km_actuales = $('#km_actuales').val();
                                                        var _color = $('#color').val();
                                                        var _extras = $('#extras').val();
                                                        var _libro_revisiones = $('#libro_revisiones').val();
                                                        var _estado_general = $('#estado_general').val();
                                                        var _observaciones = $('#observaciones').val();
                                                        $("#tasa").load('enviaMailTasar.php', {
                                                            nombre: _nombre,
                                                            email: _email,
                                                            telefono: _telefono,
                                                            marca_modelo: _marca_modelo,
                                                            motorizacion: _motorizacion,
                                                            potencia: _potencia,
                                                            fecha_1ª_matriculacion: _fecha_1ª_matriculacion,
                                                            km_actuales: _km_actuales,
                                                            color: _color,
                                                            extras: _extras,
                                                            libro_revisiones: _libro_revisiones,
                                                            estado_general: _estado_general,
                                                            observaciones: _observaciones
                                                        });
                                                    }
    </script>    
        
        
    </body>
</html>
