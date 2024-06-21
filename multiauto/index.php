<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>Login validate</title>
</head>
<body>
  <form action="#" id="formLogin">
    <div>
      <label for="estadoLogin" name="estadoLogin" id="estadoLogin"></label>
    </div>
    <div>
      <label for="username">Usuario</label>
      <input type="text" name="username" id="username">
    </div>
    <div>
      <label for="pass">Contraseña</label>
      <input type="password" name="pass" id="pass">
    </div>
    <div>
      <button type="button" id="btnLogin">Iniciar sesión</button>
    </div>
  </form>
  <script src="js/index.js"></script>
</body>
</html>

<?php
if ( isset( $_POST["username"] ) ) {
  $username= $_POST['username'];
$pass= $_POST['pass'];
echo''.$username.''.$pass.'';
}

?>