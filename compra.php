<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!-- Google Fonts NUnito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Compra | PetsPaw</title>
    <link rel="stylesheet" href="./css/navbar.css">

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
                    <form id="procesar-pago" action="#" method="post">
                        <img src="./public/assets/carrito_barra.png" width="100%" style="display: block; margin: 5rem 0">
                        <div id="carrito" class="form-group table-responsive">
                                <table class="table" id="lista-compra">
                                    <div class="container-tbody">
                                        <thead>
                                            <tr>
                                                <th scope="col">Producto</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            </tbody>
                                    </div>
                                    
                                </table>
                                <div class="price-total" style="background-color: #061437;display: block;padding: 1rem 0;">
                                    <tr>
                                        <th colspan="4" scope="col" class="text-right"><strong style="color: #fff; margin: 0 1rem;">SUB TOTAL :</strong></th>
                                        <th scope="col">
                                            <p style="color: #fff; margin: 0 1rem" id="subtotal"></p>
                                        </th>
                                        <!-- <th scope="col"></th> -->
                                    </tr>
                                    <tr>
                                        <th colspan="4" scope="col" class="text-right"><strong style="color: #fff; margin: 0 1rem"> IGV :</strong></th>
                                        <th style="color: #fff; margin: 0 1rem" scope="col">
                                            <p style="color: #fff; margin: 0 1rem" id="igv"></p>
                                        </th>
                                        <!-- <th scope="col"></th> -->
                                    </tr>
                                    <tr>
                                        <th colspan="4" scope="col" class="text-right"><strong style="color: #fff; margin: 0 1rem"> TOTAL :</strong></th>
                                        <th scope="col">
                                            <input id="total" name="monto" class="font-weight-bold border-0" readonly style="margin: 0 1rem; font-weight: bold;"></input>
                                        </th>
                                        <!-- <th scope="col"></th> -->
                                    </tr>
                                </div>
                            </div>
                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-2">
                                <a href="producto.php" class="btn btn-info btn-block">Actualizar carrito</a>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <button href="envio.php" class="btn btn-success btn-block" id="procesar-compra">Realizar compra</button>
                            </div>
                        </div>
                    </form>
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

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/sweetalert2.min.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>

    <script src="js/carrito.js"></script>
    <script src="js/compra.js"></script>
    <script src="js/confirmacion.js"></script>

</body>

</html>