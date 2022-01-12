<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET'S PAW</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Google Fonts NUnito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/home.css">
    
</head>
        
<body>
    <?php
        session_start();
        if(isset($_SESSION["sess_user"])){  
            include("header-con-sesion.php");
        } else {
            include("header-sin-sesion.html");
        }

        $con=mysqli_connect('localhost','root','','petpaws');
        mysqli_set_charset($con, 'utf8');
        $query=mysqli_query($con, "SELECT * FROM mascota");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0) {
            while($row=mysqli_fetch_assoc($query)) {
                $dbnombre = $row['nombre'];
                $dbedad = $row['edad'];
                $dbtamaño = $row['tamaño'];
                $dbsexo = $row['sexo'];
                $dbdescripcion = $row['descripcion'];
                $dbimagen = 'uploads/'.$row["imagen"];
                $dbnameP = $row['nameP'];
                $dblastName = $row['lastName'];
                $dbemail = $row['email'];
                $dbcontacto = $row['contacto'];
            }

        }
    ?>
    <main class="mt-5">
        <div id="carouselExampleCaptions mt-5 pt-5" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./public/assets/adoptar1.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="fw-bold text-start" style="color: #fccfcf">Encuentra a tu </h1>
                        <h1 class="fw-bold text-light">COMPAÑERO(A) DE VIDA</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./public/assets/adoptar2.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="fw-bold text-start" style="color: #FDDADA">Encuentra a tu </h1>
                    <h1 class="fw-bold text-light">COMPAÑERO(A) DE VIDA</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./public/assets/adoptar3.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="fw-bold text-start" style="color: #FDDADA">Encuentra a tu </h1>
                    <h1 class="fw-bold text-light">COMPAÑERO(A) DE VIDA</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        
        <div class="container mascotas my-5">
            <div class="row mx-0 mt-4">
                <div class="col-6 col-sm-4">
                    <div class="card" style="width: 95%;">
                        <img src="<?php echo $dbimagen; ?>" height="210px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?php echo $dbnombre; ?></h5>
                            <p class="card-text mb-0">Edad: <?php echo $dbedad; ?> meses</p>
                            <p class="card-text mb-0">Sexo: <?php echo $dbsexo; ?></p>
                                <div class="row mx-0">
                                    <div class="col-12 col-sm-6 px-0 mt-2">
                                        <a href="#" class="mas px-0 fw-normal text-decoration-none" data-bs-toggle="modal" data-bs-target="#Modal1">Conóceme más</a>
                                    </div>
                                    <div class="col-12 col-sm-6 px-0">
                                        <a href="#" class="btn py-1 px-4 fw-bold" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">ADOPTAR</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4">
                    <div class="card" style="width: 95%;">
                        <img src="./public/assets/perro2.png" height="210px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">NOMBRE DE LA MASCOTA</h5>
                            <p class="card-text mb-0">Edad: 3 meses</p>
                            <p class="card-text mb-0">Sexo: Macho</p>
                                <div class="row mx-0">
                                    <div class="col-12 col-sm-6 px-0 mt-2">
                                        <a href="#" class="mas px-0 fw-normal text-decoration-none" data-bs-toggle="modal" data-bs-target="#Modal1">Conóceme más</a>
                                        
                                    </div>
                                    <div class="col-12 col-sm-6 px-0">
                                        <a href="#" class="btn py-1 px-4 fw-bold" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">ADOPTAR</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4">
                    <div class="card" style="width: 95%;">
                        <img src="./public/assets/gato1.png" height="210px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">NOMBRE DE LA MASCOTA</h5>
                            <p class="card-text mb-0">Edad: 3 meses</p>
                            <p class="card-text mb-0">Sexo: Macho</p>
                                <div class="row mx-0">
                                    <div class="col-12 col-sm-6 px-0 mt-2">
                                        <a href="#" class="mas px-0 fw-normal text-decoration-none" data-bs-toggle="modal" data-bs-target="#Modal1">Conóceme más</a>
                                    </div>
                                    <div class="col-12 col-sm-6 px-0">
                                        <a href="#" class="btn py-1 px-4 fw-bold" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">ADOPTAR</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content mt-4">
                    <div class="modal-body">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h4 class="title text-center mt-4" id="exampleModalLabel">NOMBRE DE LA MASCOTA</h4>
                        <ul class="list-group list-group-horizontal mt-2">
                            <li class="list-group-item" style="border-right: 2px solid rgba(196, 196, 196, 1);">Sexo: Macho</li>
                            <li class="list-group-item" style="border-right: 2px solid rgba(196, 196, 196, 1);">EDAD: 2 años</li>
                            <li class="list-group-item">TAMAÑO: Mediano</li>
                        </ul>
                        <div class="row mx-0 my-3">
                            <div class="col-12 col-sm-7">
                                <p class="mb-0 subtitulo">¡HOLA!</p>
                                <p style="align-content: justified;">Mi nombre es Tito, y soy un adulto mayor. Busco una familia que me quiera mucho, me engría y me 
                                    tenga mucha paciencia, ya que por mi edad soy cieguito. Dame una oportunidad para tener una casita, 
                                    te prometo que me portaré bien y te daré mucho amor. Además, si me adoptas, vengo con un kit de regalos ¡Anímate!</p>
                            </div>
                            <div class="col-12 col-sm-5">
                                <img class="mb-3" src="./public/assets/perro2.png" width="100%" style="border-radius: 15px;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h4 class="title" id="offcanvasRightLabel">NOMBRE DE LA MASCOTA</h4>
                <ul class="list-group list-group-horizontal mt-2">
                    <li class="list-group-item" style="border-right: 2px solid rgba(196, 196, 196, 1);">Sexo: Macho</li>
                    <li class="list-group-item" style="border-right: 2px solid rgba(196, 196, 196, 1);">EDAD: 2 años</li>
                    <li class="list-group-item">TAMAÑO: Mediano</li>
                </ul>
                <div class="row mx-0 my-2">
                    <div class="col col-md-6">
                        <p class="mb-0 mt-3 subtitulo">¡HOLA!</p>
                        <p>Puedes llamarme Tito. Gracias por adoptarme. Lo siguiente que debes hacer es contactar con mi dueño</p>
                        <p class="subtitulo">MI DUEÑO TEMPORAL:</p>
                        <p class="mb-0">Nombre Completo del dueño</p>
                        <p class="mb-0 px-3"><img src="./public/assets/wsp.png" width="25px" height="25px"> + 51 999999991</p>
                        <p class="mb-0 px-3"><img src="./public/assets/gmail.png" width="25px" height="25px"> nombre@gmail.com</p>
                    </div>
                    <div class="col col-md-6">
                        <img class="mb-3 mt-3" src="./public/assets/perro2.png" width="100%" style="border-radius: 15px;">
                    </div>
                </div>
                
                <p class="mb-0 subtitulo">PROCESO</p>
                <ul>
                    <li>Completa el siguiente formulario: <a href="https://forms.gle/2Dg2mVAV1HnjCYe4A ">https://forms.gle/2Dg2mVAV1HnjCYe4A </a>y envíalo al correo del dueño.</li>
                    <li>En las siguientes 24 horas, el dueño se pondrá en contacto contigo para indicarte el resultado de tu solicitud de adopción y los pasos a seguir.</li>
                    <li>Por último, acepta su compromiso con la mascota</li>
                </ul>
                <div class="col-12 container">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                        Asumir el compromiso de mantenerlo, alimentarlo, cuidarlo, respetarlo, darle cariño y velar por su salud. Asegúrate de estar preparado para esta responsabilidad antes de solicitar la adopción. 
                        </label>
                    </div>
                    </div>
            </div>
        </div>
        
    </main>

    <footer class="pb-4  text-center" style="background-color: #061437;">
        <div class="container">
            <div class="row pb-0 pt-5 text-light" style="font-family: 'Nunito';">
                <div class="col-lg col-md-12" style="justify-items: center;">
                    <img class="mx-auto" src="./public/assets/logo-white.png" alt="" style="width: 40%;">
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
                            Facebook
                        </a>
                    </div>
                    <div class="col-sm my-1">
                        <a href="https://web.facebook.com/" style="text-decoration: none; color: white;">
                            Twitter  
                        </a>
                    </div>
                    <div class="col-sm my-1">
                        <a href="https://web.facebook.com/" style="text-decoration: none; color: white;">
                            Instagram
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>