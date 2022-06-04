<?php
$server = ' mysql-organizacion-eventos.alwaysdata.net';
$username = '271737_admin';
$password = 'Santiago.27';
$database = 'organizacion-eventos_users';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>