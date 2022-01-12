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
                <img src="./public/assets/home1.png" class="d-block img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="fw-bold">Encuentra todo lo que tu mascota se merece</h1>
                  <a class="btn px-5 py-3"><b>IR A LA TIENDA</b></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./public/assets/home2.png" class="d-block img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fw-bold">Encuentra todo lo que tu mascota se merece</h1>
                    <a class="btn px-5 py-3"><b>IR A LA TIENDA</b></a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./public/assets/home3.png" class="d-block img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="fw-bold">Encuentra todo lo que tu mascota se merece</h1>
                    <a class="btn px-5 py-3"><b>IR A LA TIENDA</b></a>
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
        <div class="container mascotas mt-5">
            <h3 class="text-center fw-bold">AYÚDAME A ENCONTRAR UN HOGAR</h3>
            <div class="row mx-0 mt-4">
                <div class="col-6 col-sm-4">
                    <div class="card" style="width: 95%;">
                        <img src="./public/assets/perro1.png" height="210px" class="card-img-top" alt="...">
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
            <div class="mt-4 container text-center">
                <a class="btn px-5 py-3"><b>VER MÁS</b></a>
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

        <div class="container-fluid mt-5 px-0 registratuMascota">
            <div class="row mx-0 img-fluid">
                <div class="col col-sm-6 px-0 mx-0">
                    <img src="./public/assets/home4.png" height="450px">
                </div>
                <div class="col col-sm-6 px-0 mx-0">
                    <div class="container-fluid register">
                        <div class="container py-4">
                            <h3 class="text-center">ENCUÉNTRALE UNA FAMILIA A TU MASCOTA</h3>
                        </div>
                        <div>
                            <div class="row mt-3 px-4">
                                <div class="col">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Ingresar nombre de su mascota" id="name">
                                </div>
                                <div class="col">
                                    <label for="age" class="form-label">Edad</label>
                                    <input type="text" class="form-control" placeholder="Ingresar la edad aproximada" id="age">
                                </div>
                            </div>
                            <div class="row mt-3 px-4">
                                <div class="col">
                                    <label for="tamaño" class="form-label">Tamaño</label>
                                        <select class="form-select" id="tamaño" required>
                                        <option>Pequeño</option>
                                        <option>Mediano</option>
                                        <option>Grande</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="sexo" class="form-label">Sexo</label>
                                    <select class="form-select" id="sexo" required>
                                    <option>Macho</option>
                                    <option>Hembra</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 mt-5 container text-center">
                            <a class="btn px-5 py-3 fw-bold"><b>CONTINUAR</b></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="pb-4  text-center" style="background-color: #061437;">
            <?php
                // FOOTER
                include("footer.html");
            ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>