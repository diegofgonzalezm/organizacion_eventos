<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /organizacion_eventos/index.php');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute(); 
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /organizacion_eventos/index.php");
    } else {
      $message = 'Lo siento, contraseña incorrecta';
    }
  }

?>
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


<section class="forms vh-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="image/banner-login.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="login.php" method="POST">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="image/logotipo.png" alt="" width="auto" height="30">
                                        <span class="h1 fw-bold mb-0">Inicia sesión</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia sesión con tus datos</h5>

                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Correo electrónico</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Contraseña</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-lg btn-block btn-login" type="button"> <a style="text-decoration:none">Iniciar sesión</a></button>
                                    </div>
                                    <?php if (!empty($message)) : ?>
                                        <p><?= $message ?></p>
                                    <?php endif; ?>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes una cuenta? | 
                                        <a class="log-i" href="form.php">Registrate aquí</a> <br>
                                        <!-- <a class="log-i">¿Olvidaste tu contraseña?</a> -->
                                    </p>
                                    <a href="#!" class="small text-muted">Terminos y condiciones | </a>
                                    <a href="#!" class="small text-muted">Politicas y privacidad</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-white" style="background-color: #000;">
        <?php include("templates/footer.php"); ?>
    </footer>
</section>