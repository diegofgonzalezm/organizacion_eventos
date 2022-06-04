<?php
require ('templates/header.php');

////////////// Actualizar la tabla /////////
$consulta = "UPDATE users SET `name`= :name, `email` = :email WHERE `id` = :id";
$sql = $conn->prepare($consulta);
$sql->bindParam(':name',$name,PDO::PARAM_STR, 25);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 25);
$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo "<div class='content alert alert-primary' > 

  
Gracias: $count registro ha sido actualizado  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pudo actulizar el registro  </div>";

print_r($sql->errorInfo()); 
}

?>