<?php
try {

  $username = $_POST["username"];
  $pass = $_POST["pass"];
  //$username = "marco0802";
  //$pass = "0802";

  include_once "../bbdd/bd.php";
  //$db_host = "localhost";
  //$db_user = "root";
  //$db_pass = "";
  //$db_database = "multiauto";

  //$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database, 3307);

  //SELECT * FROM usuarios WHERE correo = 'marc0802' AND password = '0802';
  $query = "SELECT * FROM usuarios WHERE correo = '".$username."' AND password = '".strval($pass)."';";
  //$query = "SELECT * FROM usuarios WHERE correo = 'marco@0802' AND password = '0802';";
  $res = mysqli_query($con, $query);
  //echo $query;
  $count = 0;
  while ($row = mysqli_fetch_assoc($res)) {

            //echo  $row['correo'];
          // echo '<br>';
            //echo $row['password'];
            echo json_encode($row);
          $count++;
          }
          if ($count>0) {
            # code...
          }else{
            echo json_encode("no");
          }
  
  
} catch (PDOException $e) {
  echo "Hubo un error: " . $e->getMessage();
}


?>