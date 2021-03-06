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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    
</head>
    <?php
        $usuario = $_SESSION["sess_user"];
    ?>
    <header>
        <nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo">
                <a href="./home.php">
                    <img src="./public/assets/logo-letra.png">
                </a>
            </div>
            <ul class="links">
                <li><a href="adoptar.php">ADOPTAR</a></li>
                <li><a href="daEnAdopcion.php">DAR EN ADOPCIÓN</a></li>
                <li><a href="carrito2.php">COMPRAR</a></li>
                <li><div class="dropdown">
                        <button class="dropbtn"><img src="./public/assets/icon-person.png" width="30px"><?php echo "$usuario"?></button>
                        <div class="dropdown-content">
                            <a href="./cerrar_sesion.php">Cerrar Sesión</a>
                        </div>
                    </div>
                </li>
                <button type="button" class="btn py-0 px-0" >
                    <img src="./public/assets/icon-carrito.png" class="nav-link dropdown-toggle img-fluid d-inline-block align-top p-1" href="#"></img>
                </button>
            </ul>

            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>
        
    </header>
<body>

</body>

</html>