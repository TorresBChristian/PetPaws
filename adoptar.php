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
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/footer.css">
    
</head>
        
<body>
    <?php
        // HEADER
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
                    <img src="./public/assets/adoptar1.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="fw-bold text-start" style="color: #fccfcf">Encuentra a tu </h1>
                        <h1 class="fw-bold text-light">COMPA??ERO(A) DE VIDA</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./public/assets/adoptar2.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="fw-bold text-start" style="color: #FDDADA">Encuentra a tu </h1>
                    <h1 class="fw-bold text-light">COMPA??ERO(A) DE VIDA</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./public/assets/adoptar3.png" class="d-block img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="fw-bold text-start" style="color: #FDDADA">Encuentra a tu </h1>
                    <h1 class="fw-bold text-light">COMPA??ERO(A) DE VIDA</h1>
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
            <?php
                // VARIABLES MASCOTAS A ADOPTAR
                $con=mysqli_connect('localhost','root','','petpaws');
                mysqli_set_charset($con, 'utf8');
                $query=mysqli_query($con, "SELECT * FROM mascota");
                $numrows=mysqli_num_rows($query);
                if($numrows!=0) {
                    while($row=mysqli_fetch_assoc($query)) {
                        $dbid = $row['id_mascota'];
                        $dbnombre = $row['nombre'];
                        $dbedad = $row['edad'];
                        $dbtama??o = $row['tama??o'];
                        $dbsexo = $row['sexo'];
                        $dbdescripcion = $row['descripcion'];
                        $dbimagen = 'uploads/'.$row["imagen"];
                        $dbnameP = $row['nameP'];
                        $dblastName = $row['lastName'];
                        $dbemail = $row['email'];
                        $dbcontacto = $row['contacto'];

                        // AVISO EN CARD GRID
                        echo '<div class="col-6 col-sm-4 my-3">';
                        echo '<div class="card" style="width: 95%;">';
                        echo '        <img src="', $dbimagen, '" height="210px" class="card-img-top" alt="...">';
                        echo '        <div class="card-body">';
                        echo '            <h5 class="card-title fw-bold">', $dbnombre, '</h5>';
                        echo '            <p class="card-text mb-0">Edad: ', $dbedad, ' a??os</p>';
                        echo '            <p class="card-text mb-0">Sexo: ', $dbsexo, '</p>';
                        echo '                <div class="row mx-0">';
                        echo '                    <div class="col-12 col-sm-6 px-0 mt-2">';
                        echo '                        <a href="#" class="mas px-0 fw-normal text-decoration-none" data-bs-toggle="modal" data-bs-target="#Modal', $dbid, '">Con??ceme m??s</a>';
                        echo '                    </div>';
                        echo '                    <div class="col-12 col-sm-6 px-0">';
                        echo '                        <a href="#" class="btn py-1 px-4 fw-bold" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight', $dbid, '" aria-controls="offcanvasRight">ADOPTAR</a>';
                        echo '                    </div>';
                        echo '                </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';

                        // MODAL DE CADA AVISO
                        echo '<div class="modal fade" id="Modal', $dbid, '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                        echo '    <div class="modal-dialog">';
                        echo '        <div class="modal-content mt-4">';
                        echo '           <div class="modal-body">';
                        echo '                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>';
                        echo '                <h4 class="title text-center mt-4" id="exampleModalLabel">', $dbnombre, '</h4>';
                        echo '                <ul class="list-group list-group-horizontal mt-2">';
                        echo '                    <li class="list-group-item" style="border-right: 2px solid rgba(196, 196, 196, 1);">Sexo: ', $dbsexo, '</li>';
                        echo '                    <li class="list-group-item" style="border-right: 2px solid rgba(196, 196, 196, 1);">EDAD: ', $dbedad, ' a??os</li>';
                        echo '                    <li class="list-group-item">TAMA??O: ', $dbtama??o, '</li>';
                        echo '                </ul>';
                        echo '                <div class="row mx-0 my-3">';
                        echo '                    <div class="col-12 col-sm-7">';
                        echo '                        <p class="mb-0 subtitulo">??HOLA!</p>';
                        echo '                        <p style="align-content: justified;">', $dbdescripcion, '</p>';
                        echo '                    </div>';
                        echo '                    <div class="col-12 col-sm-5">';
                        echo '                        <img class="mb-3" src="', $dbimagen, '" width="100%" style="border-radius: 15px;">';
                        echo '                    </div>';
                        echo '                </div>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';

                        // OFFCANVAS DE CADA AVISO
                        echo '<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight', $dbid, '" aria-labelledby="offcanvasRightLabel">';
                        echo '    <div class="offcanvas-header">';
                        echo '        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>';
                        echo '    </div>';
                        echo '    <div class="offcanvas-body">';
                        echo '        <h4 class="title" id="offcanvasRightLabel">', strtoupper($dbnombre), '</h4>';
                        echo '        <ul class="list-group list-group-horizontal mt-2">';
                        echo '            <li class="list-group-item" style="border-right: 2px solid rgba(196, 196, 196, 1);">Sexo: ', $dbsexo, '</li>';
                        echo '            <li class="list-group-item" style="border-right: 2px solid rgba(196, 196, 196, 1);">EDAD: ', $dbedad, ' a??os</li>';
                        echo '            <li class="list-group-item">TAMA??O: ', $dbtama??o, '</li>';
                        echo '        </ul>';
                        echo '       <div class="row mx-0 my-2">';
                        echo '            <div class="col col-md-6">';
                        echo '               <p class="mb-0 mt-3 subtitulo">??HOLA!</p>';
                        echo '               <p>Puedes llamarme ', $dbnombre, '. Gracias por adoptarme. Lo siguiente que debes hacer es contactar con mi due??o</p>';
                        echo '               <p class="subtitulo">MI DUE??O TEMPORAL:</p>';
                        echo '               <p class="mb-0 px-3">', $dbnameP, ' ', $dblastName, '</p>';
                        echo '               <p class="mb-0 px-3">', $dbcontacto, '</p>';
                        echo '               <p class="mb-0 px-3">', $dbemail, '</p>';
                        echo '            </div>';
                        echo '            <div class="col col-md-6">';
                        echo '                <img class="mb-3 mt-3" src="', $dbimagen, '" width="100%" style="border-radius: 15px;">';
                        echo '            </div>';
                        echo '        </div>';
                        echo '        <p class="mb-0 subtitulo">PROCESO</p>';
                        echo '        <ul>';
                        echo '            <li>Completa el siguiente formulario: <a href="https://forms.gle/2Dg2mVAV1HnjCYe4A ">https://forms.gle/2Dg2mVAV1HnjCYe4A </a>y env??alo al correo del due??o.</li>';
                        echo '            <li>En las siguientes 24 horas, el due??o se pondr?? en contacto contigo para indicarte el resultado de tu solicitud de adopci??n y los pasos a seguir.</li>';
                        echo '            <li>Asume el compromiso de mantenerlo, alimentarlo, cuidarlo, respetarlo, darle cari??o y velar por su salud.</li>';
                        echo '            <li>Aseg??rate de estar preparado para esta responsabilidad antes de solicitar la adopci??n.</li>';
                        echo '        </ul>';
                        echo '    </div>';
                        echo '</div>';
                    }
                }
            ?>
            
    </main>
    <footer class="pb-4 text-center" style="background-color: #061437;">
            <?php
                // FOOTER
                include("footer.html");
            ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>