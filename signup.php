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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/sign-up.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="float-end m-4">
                <a href="./home.php" type="button" class="btn-close" aria-label="Close"></a>
            </div>
            <form action="signup.php" method="POST">
                <div class="container">
                    <div class="caja">
                        <h3 class="text-center fw-bold my-4">Regístrate</h3>
                        
                        <div class="text-center">
                            <p class="d-inline">¿Tienes un perfil?</p>
                            <a href="./login.php"><p class="d-inline" style="color: #061437; font-weight: 600;">Iniciar Sesión</p></a> 
                        </div>
                        <div class="my-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre y Apellido</label>
                            <input type="text" class="form-control" name="nombres" id="fullName">
                        </div>           
                        <div class="my-3">
                            <label for="exampleFormControlInput1" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="pass" id="password">
                        </div>
                        <div class="text-center my-4">
                            <input type="submit" class="btn px-4 py-2" name="submit" style="background-color: #FFEC4E; color: #061437;" value="CREAR UNA CUENTA">
                        </div>
                        <!-- <p class="my-3 text-center">O regístrate con</p>
                        <div class="container row m-0">
                            <div class="col col-sm-6">
                                <a><img class="float-end" src="./public/assets/fb.png" style="height: 30px; width: 30px;"></a>
                            </div>
                            <div class="col col-sm-6">
                                <a><img src="./public/assets/Google.png" style="height: 30px; width: 30px;"></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['nombres'])) {
            $name=$_POST['nombres'];
            $email=strtolower($_POST['email']);
            $pass=$_POST['pass'];

            $con=mysqli_connect('localhost','root','','petpaws');
            $query=mysqli_query($con,"SELECT * FROM usuario WHERE correo='".$email."'");
            $numrows=mysqli_num_rows($query);

            if($numrows==0) {
                $sql="INSERT INTO usuario (correo, nombre, password) VALUES ('$email', '$name', '$pass')";
                $result=mysqli_query($con, $sql);
                
                if($result) {
                    $message = "Cuenta de usuario creada correctamente";
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
?>
</body>

</html>