<!--Conexion con base de datos en mysql-->
<?php
require 'basededatos.php';
$message = '';
if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
    $sql = "INSERT INTO usuario (correo, contraseña) VALUES (:correo, :contraseña)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':correo', $_POST['correo']);
    $password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contraseña', $password);
if ($stmt->execute()){
    $message ='Su usuario ha sido creado satisfactoriamente';
} else {
    $message = 'Lo lamento ha ocurrido un error';
}
}
?>
<!-- Estructura registro -->
<html>
    <head>
        <title>Registro</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
  </head>
<body>
<?php require 'encabezado/encabezado.php'?> 
<?php if(!empty($message)) ?>
<p><?= $message ?></p>
<h1>Registro</h1>
    <span>¿Ya tienes una cuenta? <a href="ingreso.php">Ingrese aqui</a></span>
    <form action="registro.php" method="POST">
      <input name="Correo" type="text" placeholder="Ingrese su correo">
      <input name="Contraseña" type="password" placeholder="Ingrese su contraseña">
      <input name="Confirme_contraseña" type="password" placeholder="Confirme la contraseña">
      <input type="submit" value="Registrar">
    </form>
    </body>
</html>