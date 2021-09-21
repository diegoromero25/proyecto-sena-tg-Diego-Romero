<!-- Credenciales de ingreso -->
<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'basededatos.php';
  if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
    $records = $conn->prepare('SELECT id, correo, contraseña FROM usuario WHERE correo = :correo');
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['contraseña'], $results['contraseña'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-alpina");
    } else {
      $message = 'Lo lamento, tus credenciales no concuerdan';
    }
  }
?>
<!--Estructura ingreso-->
<html>
  <head>
    <title>Ingreso</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <?php require 'encabezado/encabezado.php' ?>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Ingreso</h1>
    <span>¿No tiene una cuenta? <a href="registro.php">registrese aqui</a></span>

    <form action="ingreso.php" method="POST">
      <input name="Correo" type="text" placeholder="Ingrese su correo">
      <input name="Contraseña" type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="Ingresar">
    </form>
  </body>
</html>