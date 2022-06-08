<?php
include('templates/header.php');

////////////// Actualizar la tabla /////////
$consulta = "UPDATE users SET name=?, email=? WHERE id=?";
$sql = $conn->prepare($consulta);
$data = array($_POST['name'], $_POST['email'], $_SESSION['user_id']);
$sql->execute($data);

if ($sql->rowCount() > 0) {
    $count = $sql->rowCount();
    // echo '<script language="javascript">alert("Gracias, registro se ha actualizado correctamente");</script>';
    //     header("Location: /organizacion_eventos/index.php");
    echo "<div class='content alert alert-primary' > 
        Gracias: $count registro se ha actualizado correctamente  </div>";
} else {
    echo "<div class='content alert alert-danger'> No se pudo actualizar el registro  </div>";

    print_r($sql->errorInfo());
}
