<?php
  include 'dbconfig.php';
  
  $email = filter_input(INPUT_POST, "correo");
  $password = filter_input(INPUT_POST, "contraseña");
  $password = md5($password);
  
  $query = "SELECT * FROM usuario WHERE Correo = '".$email."' AND Contrasena = '".$password."'";
  $result = $conn->query($query);
  $array = $result->fetch_array(MYSQLI_NUM);
  $row = $result->num_rows;
  if($row > 0){
    echo '1-'.$array[0];
  }else{
    $queryDoc = "SELECT * FROM veterinario WHERE Correo = '".$email."' 
                  AND Contrasena = '".$password."'";
    $resultDoc = $conn->query($queryDoc);
    $arrayDoc = $resultDoc->fetch_array(MYSQLI_NUM);
    $rowDoc = $resultDoc->num_rows;
    if($rowDoc > 0){
      echo '2-'.$array[0];
    }
  }
  mysqli_close($conn);
?>
