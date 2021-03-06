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
                        <!-- FORM -->
                        <form action="daEnAdopcion.php" method="POST" enctype="multipart/form-data">
                            <div class="container pb-4 pt-5 px-5">
                                <h3 class="text-center">REGISTRA A TU MASCOTA</h3>
                            </div>
                            <div>
                                <div class="row mt-3 px-4">
                                    <div class="col">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Ingresar nombre de su mascota" name="nombre" id="name" value="max" required>
                                    </div>
                                    <div class="col">
                                        <label for="age" class="form-label">Edad</label>
                                        <input type="text" class="form-control" placeholder="Ingresar la edad aproximada" name="age" id="age" value="4" required>
                                    </div>
                                </div>
                                <div class="row mt-3 px-4">
                                    <div class="col">
                                        <label for="tama??o" class="form-label">Tama??o</label>
                                            <select class="form-select" name="tama??o" id="tama??o" value="Peque??o"required>
                                            <option>Peque??o</option>
                                            <option>Mediano</option>
                                            <option>Grande</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="sexo" class="form-label">Sexo</label>
                                        <select class="form-select" name="sexo" id="sexo" value="Macho"required>
                                        <option>Macho</option>
                                        <option>Hembra</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row mt-3 px-4">
                                    <div class="col">
                                        <label for="descripci??n" class="form-label">Descripci??n</label>
                                        <textarea class="form-control" name="descripcion" id="descripci??n" rows="1">Gato</textarea>
                                        
                                    </div>
                                    <div class="col">
                                        <label for="archivo" class="form-label">Imagen</label>
                                        <input type="file" class="form-control" name="archivo" id="archivo">
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center my-4">AHORA TE TOCA A T??</h3>
                            <div class="row mt-3 px-4">
                                <div class="col">
                                    <label for="nameP" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Ingrese su nombre" name="nameP" value="Paula" id="nameP">
                                </div>
                                <div class="col">
                                    <label for="lastName" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" placeholder="Ingrese su apellido" name="lastName" value="Rojas" id="lastName">
                                </div>
                            </div>
                            <div class="row mt-3 px-4">
                                <div class="col">
                                    <label for="email" class="form-label">Correo Electr??nico</label>
                                    <input type="email" class="form-control" placeholder="Ingrese su correo electr??nico de contacto" name="email" value="paula.rojas@gmail.com" id="email">
                                </div>
                                <div class="col">
                                    <label for="contacto" class="form-label">Contacto (opcional)</label>
                                    <input type="text" class="form-control" placeholder="Ingrese su n??mero de contacto" name="contacto" id="contacto" value="987654321">
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
            <?php
                // FOOTER
                include("footer.html");
            ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <?php
        if(isset($_POST["submit"])){
            if(!empty($_POST['email']) && !empty($_POST['nombre'])) {
                $nombre = ucfirst($_POST['nombre']);
                $edad = $_POST['age'];
                $tama??o = $_POST['tama??o'];
                $sexo = $_POST['sexo'];
                $descripcion = ucfirst($_POST['descripcion']);
                $imagen = $_FILES["archivo"]["name"];
                $nameP = ucfirst($_POST['nameP']);
                $lastName = ucfirst($_POST['lastName']);
                $email = strtolower($_POST['email']);
                $contacto = $_POST['contacto'];

                $con=mysqli_connect('localhost','root','','petpaws');
                mysqli_set_charset($con, 'utf8');
                $query=mysqli_query($con, "SELECT * FROM mascota WHERE nombre='".$nombre."'");
                $numrows=mysqli_num_rows($query);

                if($numrows==0) {
                    $sql="INSERT INTO mascota (nombre, tama??o, edad, sexo, descripcion, imagen, nameP, lastName, email, contacto) VALUES ('$nombre', '$tama??o', '$edad', '$sexo', '$descripcion', '$imagen', '$nameP', '$lastName', '$email', '$contacto')";
                    $result=mysqli_query($con, $sql);
                    $insert = mysqli_insert_id($con);
                    if($result) {
                        $message = "Mascota registrada correctamente";
                        move_uploaded_file($_FILES["archivo"]["tmp_name"], "uploads/".$imagen);
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        echo "<script>window.location.href = 'adoptar.php';</script>";
                    } else {  
                        $message = "Error...!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                } else {
                    $message = "La mascota ya fue registrada anteriormente. Verificar que los datos corresponden a una mascota diferente.";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            } else {
                $message = "Error! Completar todos los campos";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    ?>
</body>

</html>