<?php
include('templates/header.php');
require('database.php');
?>
<h1 class="n_h1">Mi cuenta</b></h1>
<?php
if (!empty($user)) : ?>

  <div class="wrapper">
    <div class="border"></div>
    <div class="main-element">

      <div class="d_users">
        <p><b>Mi nombre es:</b><br><input class="box-inf" type="text" value="<?= $user['name']; ?>" name="name" disabled></p</div>
        <div>
        <p><b>Mi correo es:</b><br><input class="box-inf" type="text" value="<?= $user['email']; ?>" name="email" disabled></p</div>
        <div>
        <p><b>Mi contraseña es:</b><br><input class="box-inf" type="text" value="<?= $user['cpassword']; ?>" name="cpassword"disabled></p</div>

          <form name="formulario" method="post" action="actualizarclientes.php">
            <!-- Botón de envío de formulario -->
            <input class="send_date" type="submit" value="Editar datos" />
          </form>
        </div>

      </div>

    <?php else : ?>

      <p>Lo sentimos</p>

    <?php endif; ?>
  
    