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
        <div class="container-fluid mt-5 pt-3 px-0 registratuMascota">
            <div class="row mx-0 img-fluid">
                <div class="col col-sm-5 px-0 mx-0">
                    <img src="./public/assets/adopcion.png" height="100%">
                </div>
                <div class="col col-sm-7 px-0 mx-0">
                    <div class="container-fluid register">
                        <form action="daEnAdopcion.php" method="POST">
                            <div class="container pb-4 pt-5 px-5">
                                <h3 class="text-center">REGISTRA A TU MASCOTA</h3>
                            </div>
                            <div>
                                <div class="row mt-3 px-4">
                                    <div class="col">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Ingresar nombre de su mascota" name="name" id="name" required>
                                    </div>
                                    <div class="col">
                                        <label for="age" class="form-label">Edad</label>
                                        <input type="text" class="form-control" placeholder="Ingresar la edad aproximada" name="age" id="age" required>
                                    </div>
                                </div>
                                <div class="row mt-3 px-4">
                                    <div class="col">
                                        <label for="tamaño" class="form-label">Tamaño</label>
                                            <select class="form-select" name="tamaño" id="tamaño" required>
                                            <option>Pequeño</option>
                                            <option>Mediano</option>
                                            <option>Grande</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="sexo" class="form-label">Sexo</label>
                                        <select class="form-select" name="sexo" id="sexo" required>
                                        <option>Macho</option>
                                        <option>Hembra</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row mt-3 px-4">
                                    <div class="col">
                                        <label for="descripción" class="form-label">Descripción</label>
                                        <textarea class="form-control" name="descripción" id="descripcion" rows="1"></textarea>
                                    </div>
                                    <div class="col">
                                        <label for="archivo" class="form-label">Imagen</label>
                                        <input type="file" class="form-control" name="archivo" id="archivo" multiple>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center my-4">AHORA TE TOCA A TÍ</h3>
                            <div class="row mt-3 px-4">
                                <div class="col">
                                    <label for="nameP" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Ingrese su nombre" name="nameP" id="nameP">
                                </div>
                                <div class="col">
                                    <label for="lastName" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" placeholder="Ingrese su apellido" name="lastName" id="lastName">
                                </div>
                            </div>
                            <div class="row mt-3 px-4">
                                <div class="col">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" placeholder="Ingrese su correo electrónico de contacto" name="email" id="email">
                                </div>
                                <div class="col">
                                    <label for="contacto" class="form-label">Contacto (opcional)</label>
                                    <input type="text" class="form-control" placeholder="Ingrese su número de contacto" name="contacto" id="contacto">
                                </div>
                            </div>
                            <div class="mb-5 mt-5 container text-center">
                                <input type="submit" class="btn px-5 py-3 fw-bold" name="submit" style="background-color: #FFFFFF; color: #061437;" value="CONTINUAR">
                            </div>
                        </form>
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
    
    <!-- <?php
    if(isset($_POST["submit"])){
        if(!empty($_POST['email']) && !empty($_POST['nameP'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $tamaño = $_POST['tamaño'];
            $sexo = $_POST['sexo'];
            $descripcion = $_POST['descripcion'];
            $imagen = $_POST['archivo'];
            $nameP = $_POST['nameP'];
            $lastName = $_POST['lastName'];
            $email = strtolower($_POST['email']);
            $contacto = $_POST['contacto'];

            $con=mysqli_connect('localhost','root','','petpaws');
            $query=mysqli_query($con,"SELECT * FROM mascota WHERE name='".$name."'");
            $numrows=mysqli_num_rows($query);

            if($numrows==0) {
                $sql="INSERT INTO mascota ('nombre', 'tamaño', 'edad', 'sexo', 'descripcion', 'imagen', 'nameP', 'lastName', 'email', 'contacto')
                    VALUES ('$name', '$tamaño', '$age', '$sexo', '$descripcion', '$archivo', '$nameP', '$lastName', '$email', '$contacto')";
                $result=mysqli_query($con, $sql);
                
                if($result) {
                    $message = "Mascota registrada correctamente";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    echo "<script>window.location.href = 'login.php';</script>";
                } else {  
                    $message = "Error!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }

            } else {
                $message = "Error! El correo ingresado ya está siendo usado por otro usuario";
                echo "<script type='text/javascript'>alert('$message');</script>";

            }

        } else {
            $message = "Error! Completar todos los campos";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    ?> -->
</body>

</html>