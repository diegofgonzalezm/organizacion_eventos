<?php
include('templates/header.php');
require('database.php');

?>
<h1 class="n_h1">Mi cuenta</b></h1>
<p class="box-inf">Mira tus datos y/o actualizalos</p> 
<?php
if (!empty($user)) : ?>

  <div class="wrapper">
    <div class="border"></div>
    <div class="main-element">
      <form name="formulario" method="post" action="actualizarclientes.php">
        <div class="d_users">
          <p><b>Mi nombre es:</b><br><input class="box-inf" type="text" value="<?= $user['name']; ?>" name="name"></p>
          <p><b>Mi correo es:</b><br><input class="box-inf" type="text" value="<?= $user['email']; ?>" name="email"></p>
          <p><b>Mi contraseña es:</b><br><input class="box-inf" type="text" value="<?= $user['cpassword']; ?>" name="cpassword"></p>
        </div>
          <!-- Botón de envío de formulario -->
          <input class="send_d" type="submit" value="Actualizar"/>

      </form>
    </div>

  </div>
  </div>

<?php else : ?>

  <p>Lo sentimos</p>

<?php endif; ?>
  