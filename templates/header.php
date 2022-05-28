
<?php

  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, name, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;
  

    if (count($results) > 0) {
      $user = $results;

    }
}
  
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="image/logotipo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Organización de eventos</title>
</head>

<body>

    <nav class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">
                    CONTACTO
                </div>
                <div class="col-4 text-center">
                    <a class="call" href="tel: +57 3166195171"><i class="fa-solid fa-phone"></i> Llamanos </a>
                </div>
                <div class="col-4 text-center">
                    <a class="mail" href="mailto:diegogm122@gmail.com?Subject=Necesito%20soporte%20en%20algo"><i class="fa-solid fa-envelope"></i> Contactar por correo </a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Politicas</a>
                    </li>
                    <li class="nav-item">
                        <?php if (!empty($user)) : ?>                            
                                        <!-- Navbar dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Bienvenid@. <b><?= $user['name']; ?></b>
                                    </a>
                                    <!-- Dropdown menu -->
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Configuración</a></li>

                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a href="logout.php" class="dropdown-item">Cerrar sesión</a></li>
                                    </ul>
                                </li>
                                    <?php else : ?>

                    <li class="nav-item">
                        <button type="button" class="btn btn-success"> <a class="btn-is" href="login.php" style="text-decoration:none">Inicia sesión</a></button>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="form.php">Registro</a>
                    <?php endif; ?>

                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>