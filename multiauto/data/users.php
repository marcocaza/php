<?php
include_once "bbdd/bd.php";


try {
    include_once "bbdd/bd.php";
  
  $username = $_POST["username"];
  $pass = $_POST["pass"];

  $query = $con->prepare("SELECT * FROM usuarios WHERE correo = :username AND password = :pass");
  $query->execute([":username" => $username, ":pass" => $pass]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  echo json_encode($result);
} catch (PDOException $e) {
  echo "Hubo un error: " . $e->getMessage();
}