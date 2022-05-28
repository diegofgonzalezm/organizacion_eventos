<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /organizacion_eventos/index.php');
?>