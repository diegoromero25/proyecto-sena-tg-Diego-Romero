<!--Ingreso de usuarios-->
<?php
  session_start();
  require 'basededatos.php';
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, correo, contraseña FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!--Estructura basica-->
<html>
    <head>
    <title> Bienvenido a Alpina</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <a href="/php-alpina"> Alpina</a>
    <h1>Bienvenido a Alpina</h1>
    <a href="ingreso.php">Ingrese</a> o
    <a href="registro.php">Registrese</a>
</body>
</html>
