<?php
  include 'dbconfig.php';
  
  $email = filter_input(INPUT_POST, "correo");
  $password = filter_input(INPUT_POST, "contraseña");
  $password = md5($password);
  
  $query = "SELECT * FROM usuario WHERE Correo = '".$email."' AND Contrasena = '".$password."'";
  $result = $conn->query($query);
  $row = $result->num_rows;
  if($row > 0){
    echo '1';
  }else{
    $queryDoc = "SELECT * FROM veterinario WHERE Correo = '".$email."' 
                  AND Contrasena = '".$password."'";
    $resultDoc = $conn->query($queryDoc);
    $rowDoc = $resultDoc->num_rows;
    if($rowDoc > 0){
      echo '2';
    }
  }
  mysqli_close($conn);
?>
