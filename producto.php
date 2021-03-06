<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito | PetsPaw</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/sweetalert2.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Google Fonts NUnito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">   
    <script src="./js/popper.min.js"></script>

    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">

</head>

    <!-- Navbar -->
    
<body>
    <?php
        session_start();
        $usuario = $_SESSION["sess_user"];
    ?>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar2">
            <div class="container-fluid px-0 mx-5">
                <div class="logo">
                    <a href="./home.php">
                        <img src="./public/assets/logo-letra.png">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapsible wrapper -->
                <div class="navbar-collapse text-center collapse show" id="navbarSupportedContent" style="font-family: 'Nunito'; font-weight: 700;">
                    <!-- Left links -->
                    <ul class="navbar-nav links2" style="margin-right: 0px;">
                        <li><a href="adoptar.php">ADOPTAR</a></li>
                        <li><a href="daEnAdopcion.php">DAR EN ADOPCI??N</a></li>
                        <li><a href="#">COMPRAR</a></li>
                        <li><div class="dropdown">
                            <button class="dropbtn"><img src="./public/assets/icon-person.png" width="30px"><?php echo "$usuario"?></button>
                            <div class="dropdown-content">
                                <a href="./cerrar_sesion.php">Cerrar Sesi??n</a>
                            </div>
                        </div>
                        </li>
                        <!-- <li><a href="./signup.php"><button class="register"><b>REG??STRATE</b></button></a></li>
                        <li><a href="./login.php" class="iniciar">INICIAR SESI??N</a></li> -->
                    </ul>

                    <!--CARRITO-->
                    <button type="button" class="btn py-0 px-0" >
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <img onmouseover="showCart(this)" src="./public/assets/icon-carrito.png" loading="lazy" class="nav-link dropdown-toggle img-fluid d-inline-block align-top p-1" loading="lazy"
                                        href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"></img>
                                        <!--<div  class="badge rounded-circle text-light text-center px-1 py-1" style="height: 30px; width: 30px; font-size: 22px; background-color: #061437;">
                                            <p class="count-product" style="text-align: center; top: auto;">0</p>
                                        </div>-->
                                    <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                        <table id="lista-carrito" class="table">
                                            <thead>
                                                <tr>
                                                    <th class="px-3">Producto</th>
                                                    <th class="px-3">Nombre</th>
                                                    <th class="px-3">Precio</th>
                                                    <th class="px-3"></th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <div class="container">
                                            <a href="#" id="vaciar-carrito" class="btn btn-danger btn-block mr-1">Vaciar Carrito</a>
                                            <a href="#" id="procesar-pedido" class="btn btn-danger btn-block mr-1">Procesar Compra</a>
                                        </div>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </button>
                    
                </div>
            </div>       
        </nav>
    </header>

    <main class="mt-5" style=" font-family: 'Roboto';">
        <div id="carouselExampleSlidesOnly mt-5 pt-5 container-fluid" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./public/assets/productos1.png" class="d-block img-fluid" width="120%" alt="...">
                </div>
            </div>
        </div>

        <div class="container text-center" style="margin-top: 4rem;">
            <div class="btn-group" role="group" aria-label="Basic example" style="box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.4); border-radius: 15px;">
                <button type="button" class="btn btn-light py-3 pr-5" style="font-size: 20px; font-weight: 500; padding-left: 7rem;">??OFERTAS!</button>
                <button type="button" class="btn btn-light py-3 px-5" style="font-size: 20px; font-weight: 500;">Todo</button>
                <button type="button" class="btn btn-light py-3 px-5" style="font-size: 20px; font-weight: 500;">Perros</button>
                <button type="button" class="btn btn-light py-3 pl-5" style="font-size: 20px; font-weight: 500; padding-right: 7rem;">Gatos</button>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 7rem;"> 
            <div class="row mx-3">
                <div class="col col-sm-3">
                    <img src="./public/assets/filtro.png">
                </div>
                <div class="col col-sm-9">
                    <div class="container-product" id="lista-productos"> 
                        <div class="card-deck mb-3 text-center">
                            <div class="card mb-4"  style="border: none;">                 
                                <div class="card-body">
                                    <img src="./public/assets/producto-4.png" class="card-img-top" style="height: 150px; width: 100px;">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li></li>
                                        <div class="card-header">
                                            <h4 class="my-0 font-weight-bold" style="font-size: 18px">Comida para gatos marca Precio-Uno</h4>
                                        </div>
                                        <h1 class="card-title pricing-card-title precio" style="font-size: 24px; color: #2D79E9; font-weight: 700;">S/. <span class="">33.40</span></h1>
                                    </ul>
                                    <a href="" class="btn btn-inline btn-primary agregar-carrito pt-2" id="btn-agregar" data-id="1" style="border-radius: 50%; width: 60px; height: 50px; color:black; ">
                                        3 <img src="./public/assets/star.png">
                                    </a>
                                </div>
                            </div>
                            <div class="card mb-4"  style="border: none;">                  
                                <div class="card-body">
                                    <img src="./public/assets/product-1.png" class="card-img-top" style="height: 150px; width: 150px;">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li></li>
                                        <div class="card-header">
                                            <h4 class="my-0 font-weight-bold" style="font-size: 18px">Juguetes para gatos</h4>
                                        </div>
                                        <h1 class="card-title pricing-card-title precio" style="font-size: 24px; color: #2D79E9; font-weight: 700;">S/. <span class="">41.60</span></h1>
                                    </ul>
                                    <a href="" class="btn btn-inline btn-primary agregar-carrito pt-2" id="btn-agregar2" data-id="2"  style="border-radius: 50%; width: 60px; height: 50px; color:black; ">
                                        3 <img src="./public/assets/star.png">
                                    </a>
                                </div>
                            </div>
                            <div class="card mb-4" style="border: none;">                  
                                <div class="card-body">
                                    <img src="./public/assets/producto-3.png" class="card-img-top" style="height: 150px; width: 125px;">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li></li>
                                        <div class="card-header">
                                            <h4 class="my-0 font-weight-bold" style="font-size: 18px">Comida para gatos Ricocat Max</h4>
                                        </div>
                                        <h1 class="card-title pricing-card-title precio" style="font-size: 24px; color: #2D79E9; font-weight: 700;">S/. <span class="">33.40</span></h1>
                                    </ul>
                                    <a href="" class="btn btn-inline btn-primary agregar-carrito pt-2" id="btn-agregar3" data-id="3" style="border-radius: 50%; width: 60px; height: 50px; color:black; ">
                                        4 <img src="./public/assets/star.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-deck mb-3 text-center">
                            <div class="card mb-4" style="border: none;">                  
                                <div class="card-body">
                                    <img src="./public/assets/product-2.png" class="card-img-top" style="height: 150px; width: 125px;">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li></li>
                                        <div class="card-header">
                                            <h4 class="my-0 font-weight-bold" style="font-size: 18px">Shampoo para gatos Traper</h4>
                                        </div>
                                        <h1 class="card-title pricing-card-title precio"  style="font-size: 24px; color: #2D79E9; font-weight: 700;">S/. <span class="">41.46</span></h1>
                                    </ul>
                                    <a href="" class="btn btn-inline btn-primary agregar-carrito pt-2" id="btn-agregar4" data-id="4" style="border-radius: 50%; width: 60px; height: 50px; color:black; ">
                                        4 <img src="./public/assets/star.png">
                                    </a>
                                </div>
                            </div>
                            <div class="card mb-4" style="border: none;">                  
                                <div class="card-body">
                                    <img src="./public/assets/product-3.png" class="card-img-top" style="height: 150px; width: 125px;">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li></li>
                                        <div class="card-header">
                                            <h4 class="my-0 font-weight-bold" style="font-size: 18px">Arenero para gatos</h4>
                                        </div>
                                        <h1 class="card-title pricing-card-title precio"style="font-size: 24px; color: #2D79E9; font-weight: 700;">S/. <span class="">39.90</span></h1>
                                    </ul>
                                    <a href="" class="btn btn-inline btn-primary agregar-carrito pt-2" id="btn-agregar5" data-id="5" style="border-radius: 50%; width: 60px; height: 50px; color:black; ">
                                        5 <img src="./public/assets/star.png">
                                    </a>
                                </div>
                            </div>
                            <div class="card mb-4" style="border: none;">                   
                                <!-- <div class="card-body">
                                    <img src="./public/assets/product-3.png" class="card-img-top" style="height: 150px; width: 200px;">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li></li>
                                        <div class="card-header">
                                            <h4 class="my-0 font-weight-bold" style="font-size: 18px">Producto 6</h4>
                                        </div>
                                        <h1 class="card-title pricing-card-title precio" style="font-size: 24px; color: #2D79E9; font-weight: 700;">S/. <span class="">15.99</span></h1>
                                    </ul>
                                    <a href="" class="btn btn-inline btn-primary agregar-carrito pt-2" id="btn-agregar6" data-id="6"  style="border-radius: 50%; width: 60px; height: 50px; color:black; ">
                                        3 <img src="./public/assets/star.png">
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container-product" id="lista-productos"> 
            <div class="card-deck mb-3 text-center">
                <!-- <div class="card mb-4 shadow-sm">                 
                    <div class="card-body">
                        <img src="./public/assets/product-1.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 1</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">19.90</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar" data-id="1">Agregar al Carrito</a>
                    </div>
                </div> -->
                <!-- <div class="card mb-4 shadow-sm">                  
                    <div class="card-body">
                        <img src="./public/assets/product-2.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 2</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">9.90</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar2" data-id="2">Agregar al Carrito</a>
                    </div>
                </div> -->
                <!-- <div class="card mb-4 shadow-sm">                  
                    <div class="card-body">
                        <img src="./public/assets/product-3.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 3</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">15.99</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar3" data-id="3">Agregar al Carrito</a>
                    </div>
                </div> -->
            </div>
            <div class="card-deck mb-3 text-center">
                <!-- <div class="card mb-4 shadow-sm">                  
                    <div class="card-body">
                        <img src="./public/assets/product-1.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 4</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">19.90</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar4" data-id="4">Agregar al Carrito</a>
                    </div>
                </div> -->
                <div class="card mb-4 shadow-sm" style="border: none;" hidden>                  
                    <div class="card-body">
                        <img src="./public/assets/product-2.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 5</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">9.90</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar5" data-id="5">Agregar al Carrito</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm " hidden>                   
                    <div class="card-body">
                        <img src="./public/assets/product-3.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 6</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">15.99</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar6" data-id="6">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm" hidden>                    
                    <div class="card-body">
                        <img src="./public/assets/product-1.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 7</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">19.90</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar7" data-id="7">Agregar al Carrito</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm" hidden>              
                    <div class="card-body">
                        <img src="./public/assets/product-2.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 8</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">9.90</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar8" data-id="8">Agregar al Carrito</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm" hidden>
                    
                    <div class="card-body">
                        <img src="./public/assets/product-3.png" class="card-img-top">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <div class="card-header">
                                <h4 class="my-0 font-weight-bold" style="font-size: 20px">Producto 9</h4>
                            </div>
                            <h1 class="card-title pricing-card-title precio">S/. <span class="">15.99</span></h1>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" id="btn-agregar9" data-id="9">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
    
    </main>

    <footer>
        <div class="content">
          <div class="left box">
             <div class="upper">
                 <img class="" src="./public/assets/logo-white.png" alt="" style="width: 40%;">
             <div class="pets">PET'S PAW</div>
            </div>
            
          </div>
          <div class="middle box">
            <div class="topic">Nosotros</div>
            <div class="center" ><a href="#">??Quienes somos?</a></div>
            <div class="center" ><a href="#">Misi??n y visi??n</a></div>
            <div class="center" ><a href="#">Nuestros Aliados</a></div>
          </div>
          <div class="right box">
            <div class="topic">Cont??ctanos</div>
            <form class="center" action="#">
              <input type="text" placeholder="Enter email address">
              <input type="submit" name="" value="Send">
              <div class="media-icons">
                <a href=""><img src="./public/assets/facebook.png"></a>
                <a href=""><img src="./public/assets/twitter.png"></a>
                <a href=""><img src="./public/assets/insta.png"></a>
              </div>
            </form>
          </div>
        </div>
        <div class="bottom">
          <p>Copyright ?? 2021 <a href="#">Pets Paw</a></p>
        </div>
      </footer>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/sweetalert2.min.js"></script>
    <script src="./js/carrito.js"></script>
    <script src="./js/pedido.js"></script>

</body>
</html>