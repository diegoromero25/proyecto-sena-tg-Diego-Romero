<!--Conectividad con base de datos-->
<?php
$_SERVER = 'localhost';
$username = 'root';
$password = '';
$database = 'php_alpina_basededatos';
try {
    $conn = new PDO("mysql:host=$_SERVER;dbname=$database;", $username, $password);
  } catch (PDOException $error) {
    die('Conexion fallida: ' . $error->getMessage());
  }
?>
