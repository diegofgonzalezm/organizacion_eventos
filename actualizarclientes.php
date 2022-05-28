<?php


include('templates/header.php');

require 'cliente.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $POST['password'];

require 'database.php';

 $sql = "UPDATE `users` SET  `name`= '$name', `email`='$email',`password`='$password' WHERE `id` = $id;";
      
 
    

?>