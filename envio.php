<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!-- Google Fonts NUnito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Google Maps JavaScript library -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDF0iPeWLnqM2hp1zlKAxljqZDH20zUgzQ"></script>
    <link rel="stylesheet" href="./css/navbar.css">
    <script>
        var searchInput = 'ubicacion';
        $(document).ready(function () {
         var autocomplete;
         autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
          types: ['geocode'],
            /*componentRestrictions: {
            country: "USA"
            }*/
         });
         google.maps.event.addListener(autocomplete, 'place_changed', function () {
          var near_place = autocomplete.getPlace();
         });
        });
    </script>
    <title>Envío | PetsPaw</title>
</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION["sess_user"])){  
            include("header-con-sesion.php");
        } else {
            include("header-sin-sesion.html");
        }
    ?>

    <br>

    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <img src="./public/assets/envio-barra.png" width="100%" style="display: block; margin-top: 5rem;">
                    <br><br>
                    <form id="procesar-pago" action="#" method="post" style="width: 100%; display: flex; justify-content: space-between; align-items: center;">
                        <div class="datos-cliente">
                            <h2 class="d-flex justify-content-center mb-3">Detalles de Facturación</h2>
                            <div class="form-group row">
                                <div class="nombre" id="group__nombre">
                                    <label for="cliente" class="formulario__label" style="font-weight: bold;">Nombre:</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="formulario__input" id="cliente" placeholder="Ingrese sus nombres" name="destinatario" style="position: relative;">
                                        <i class="formulario__validacion-estado fas fa-times-circle" style="position: absolute; right: -1rem; top: .5rem;"></i>
                                    </div>
                                    <p class="formulario__input-error" style="font-size: 10px; color: #bb2929;">3-16 letras, no admite números ni carácteres</p>
                                </div>
                                <div class="apellidos" id="group__apellidos">
                                    <label for="cliente" class="formulario__label"style="font-weight: bold;">Apellidos:</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="formulario__input" id="cliente" placeholder="Ingrese sus apellidos" name="Apellidos" style="position: relative;">
                                        <i class="formulario__validacion-estado fas fa-times-circle" style="position: absolute; right: -1rem; top: .5rem;"></i>
                                    </div>
                                    <p class="formulario__input-error" style="font-size: 10px; color: #bb2929">3-16 letras, no admite números ni carácteres</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="correo" id="group__correo">
                                    <label for="email" class="formulario__label"style="font-weight: bold;">Correo electrónico:</label>
                                    <div class="col-12 col-md-10">
                                        <input type="email" class="formulario__input" id="correo" placeholder="Ingresa tu correo" name="cc_to" style="position: relative;">
                                        <i class="formulario__validacion-estado fas fa-times-circle" style="position: absolute; right: -1rem; top: .5rem;"></i>
                                    </div>
                                    <p class="formulario__input-error" style="font-size: 10px; color: #bb2929">No ha ingresado @</p>
                                </div>
                                <div class="ubicacion" id="group__ubicacion">
                                    <label for="email" class="formulario__label"style="font-weight: bold;">Ubicación:</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="formulario__input" id="ubicacion" placeholder="Ingrese su ubicación" name="ubicacion" style="position: relative;">
                                        <i class="formulario__validacion-estado fas fa-times-circle" style="position: absolute; right: -1rem; top: .5rem;"></i>
                                    </div>
                                    <p class="formulario__input-error" style="font-size: 10px; color: #bb2929">No admite signos</p>
                                </div>   
                            </div>
                            <div class="form-group row">
                                <div class="tarjeta" id="group__tarjeta">
                                    <label for="email" class="formulario__label"style="font-weight: bold;">N° de tarjeta:</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="formulario__input" id="tarjeta" placeholder="Tarjeta de pago" name="tarjeta" style="position: relative;">
                                        <i class="formulario__validacion-estado fas fa-times-circle" style="position: absolute; right: -1rem; top: .5rem;"></i>
                                    </div>
                                    <p class="formulario__input-error" style="font-size: 10px; color: #bb2929">Solo admite números</p>
                                </div>
                                <div class="contacto" id="group__contacto">
                                    <label for="email" class="formulario__label"style="font-weight: bold;">Contacto:</label>
                                    <div class="col-12 col-md-10">
                                        <input type="tel" class="formulario__input" id="contacto" placeholder="Celular/Teléfono" name="contacto" style="position: relative;">
                                        <i class="formulario__validacion-estado fas fa-times-circle" style="position: absolute; right: -1rem; top: .5rem;"></i>
                                    </div>
                                    <p class="formulario__input-error" style="font-size: 10px; color: #bb2929">Solo admite de 7 a 14 números</p>
                                </div>   
                            </div>
                            <div class="form-group row">
                                <div class="expiracion" id="group__expiracion">
                                    <label for="email" class="formulario__label"style="font-weight: bold;">Expiración:</label>
                                    <div class="col-12 col-md-10">
                                        <input type="datetime" class="formulario__input" id="expiracion" placeholder="MM/AAAA" name="expiracion" style="position: relative;">
                                        <i class="formulario__validacion-estado fas fa-times-circle" style="position: absolute; right: -1rem; top: .5rem;"></i>
                                    </div>
                                    <p class="formulario__input-error" style="font-size: 10px; color: #bb2929">No admite letras ni signos</p>
                                </div>
                                <div class="cvv" id="group__cvv">
                                    <label for="inputcvv" class="formulario__label"style="font-weight: bold;">Cod. de seguridad</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="formulario__input" id="codigo" placeholder="CVV" name="cvv" style="position: relative;">
                                        <i class="formulario__validacion-estado fas fa-times-circle" style="position: absolute; right: -1rem; top: .5rem;"></i>
                                    </div>
                                    <p class="formulario__input-error" style="font-size: 10px; color: #bb2929">Solo admite números, intervalo fijo 3</p>
                                </div>   
                            </div>
                        </div>
                        <div class="container-lita-pago">
                            <div id="carrito" class="form-group table-responsive">
                                <table class="table" id="lista-compra">
                                        
                                        <tbody style="width: 100%; display: block; padding: 1rem;">
        
                                        </tbody>
                                    <tr>
                                        <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                                        <th scope="col">
                                            <input id="total" name="monto" class="font-weight-bold border-0" readonly style="background-color: white;"></input>
                                        </th>
                                        <!-- <th scope="col"></th> -->
                                    </tr>
    
                                </table>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-center" id="loaders">
                        <img id="cargando" src="./public/assets/cargando.gif" width="220">
                    </div>

                    <div class="row justify-content-between" style="margin: 1rem 0">
                        <div class="col-xs-12 col-md-4">
                            <button href="confirmacion.php" class="btn btn-success btn-block" id="realizar-pedido" type="submit">Realizar pedido</button>
                        </div>
                        <div class="col-md-4 mb-2">
                            <a href="compra.php" class="btn btn-info btn-block">Actualizar cantidades</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="pb-4 mt-5 text-center" style="background-color: #061437;">
        <div class="container">
            <div class="row pb-0 pt-5 text-light" style="font-family: 'Nunito';">
                <div class="col-lg col-md-12 aling-items-center justify-content-center">
                    <img src="./public/assets/logo-white.png" alt="" style="width: 40%;">
                    <div class="row py-1">
                        <div class="col"><a href="#" style="text-decoration: none; color: white;"><h2 style="font-weight: 700;">PET'S PAW</h2></a></div>
                    </div>
                </div>
                <div class="col-lg col-md-12 text-light pt-1">
                    <div class="row">
                        <div class="col"><h5 style="font-weight: 700;">Nosotros</h5></div>
                    </div>
                        <div class="row py-1">
                            <div class="col"><a href="#" style="text-decoration: none; color: white;">¿Quiénes somos?</a></div>
                        </div>
                        <div class="row py-1">
                            <div class="col"><a href="#" style="text-decoration: none; color: white;">Misión y Visión</a></div>
                        </div>
                        <div class="row py-1">
                            <div class="col"><a href="#" style="text-decoration: none; color: white;">Nuestros Aliados</a></div>
                        </div>
                </div>
                <div class="col-lg col-md-12 pt-1">
                    <div class="row">
                        <div class="col"><h5 style="font-weight: 700;">Redes Sociales</h5></div>
                    </div>
                    <div class="col-sm my-1">
                        <a href="https://web.facebook.com/" style="text-decoration: none; color: white;">
                            <img src="./public/assets/facebook.png" style="height: 30px; width: 30px;"> Facebook
                        </a>
                    </div>
                    <div class="col-sm my-1">
                        <a href="https://web.facebook.com/" style="text-decoration: none; color: white;">
                            <img src="./public/assets/twitter.png" style="height: 30px; width: 30px;"> Twitter  
                        </a>
                    </div>
                    <div class="col-sm my-1">
                        <a href="https://web.facebook.com/" style="text-decoration: none; color: white;">
                            <img src="./public/assets/insta.png"style="height: 30px; width: 30px;"> Instagram
                        </a>
                    </div>
                </div>
            </div>
            <div class="row pt-3 mt-4 border-top border-light text-center">
                <div class="col-lg-4 col-md-12">
                    <a href="#" style="text-decoration: none; color: white;">Política de Privacidad</a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <a href="3" style="text-decoration: none; color: white;">Avisos Legales</a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <a href="#" style="text-decoration: none; color: white;">Términos y Condiciones</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>

    <script src="js/carrito-envio.js"></script> <!--carrito-->
    <script src="js/envio.js"></script>
    <script src="js/confirmacion.js"></script>
    

</body>

</html>