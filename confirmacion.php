<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!-- Google Fonts NUnito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Confirmación | PetsPaw</title>
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
                <img src="./public/assets/confirmacion_barra.png" width="100%" style="display: block; margin: 5rem 0">
                <h1>Detalle de Compra</h1>
                <div class="col" style="justify-content: space-between; display: flex; align-items: center;">
                    <form id="procesar-pago" action="#" method="post">
                        <div id="carrito" class="form-group table-responsive">
                                <table class="table" id="lista-compra" style="width: 100%;">
                                    <div class="container-tbody" style="flex-direction: column">
                                        <div class="container-confirmacion" style="width: 100%">
                                            <thead style="width: 100%">
                                                <tr"> 
                                                    <th scope="col">Producto</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody style="width: 100%">
                                            </tbody>
                                        </div>
                                            
                                            <tr>
                                                <th colspan="4" scope="col" class="text-right">SUB TOTAL :</th>
                                                <th scope="col">
                                                    <p id="subtotal"></p>
                                                </th>
                                                <!-- <th scope="col"></th> -->
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="col" class="text-right">IGV :</th>
                                                <th scope="col">
                                                    <p id="igv"></p>
                                                </th>
                                                <!-- <th scope="col"></th> -->
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="col" class="text-right"><strong>TOTAL :</strong></th>
                                                <th scope="col">
                                                    <input id="total" name="monto" class="font-weight-bold border-0" readonly style="background-color: white; font-weight: bold; font-size: 18px;"></input>
                                                </th>
                                                <!-- <th scope="col"></th> -->
                                            </tr>
                                    </div>
                                    
                                </table>
                            </div>
                        <div class="row justify-content-center" id="loaders" style="position: absolute; top: 25%; right: 45%;">
                            <img id="cargando" src="./public/assets/cargando.gif" width="220">
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-xs-12 col-md-4">
                                <button href="#" class="btn-confirmar" id="confirmar-compra">Confirmar</button>
                            </div>
                        </div>                 
                </form>
                    <img src="./public/assets/confirmacion_agradecimiento_compra.png" width="600px" style="margin-left: 2rem;">  
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

    <script src="js/confirmacion-carrito.js"></script>
    <script src="js/confirmacion.js"></script>
    

</body>

</html>