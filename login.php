<?php
  include 'db_config.php';
  
  $email = filter_input(INPUT_POST, "correo");
  $password = filter_input(INPUT_POST, "contraseña");
  $password = md5($password);
  
  $query = "SELECT * FROM usuario WHERE Correo = '".$email."' 
            AND Contraseña = '".$password."'";
  $result = $conn->query($query);

  if(mysqli_num_rows($result) == 1){
    echo '1';
  }else{
    $queryDoc = "SELECT * FROM usuario WHERE Correo = '".$email."' 
                  AND Contraseña = '".$password."'";
    $resultDoc = $conn->query($queryDoc);
    if(mysqli_num_rows($resultDoc) == 1){
      echo '2';
    }
  }
$conn->close();
?>
