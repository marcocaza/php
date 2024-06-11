<?php
$db = "multiauto";
$host = "localhost";
$user = "root";
$password = "";



try {

  $username = $_POST["username"];
  $pass = $_POST["pass"];

  




  include_once "db_empresa.php";
                        
  $query = "SELECT * FROM usuarios WHERE correo = '"$username"' AND password = '"$pass"';";
  $res = mysqli_query($con, $query);


  echo json_encode($res);
} catch (PDOException $e) {
  echo "Hubo un error: " . $e->getMessage();
}