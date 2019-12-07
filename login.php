<?php
  include 'db_config.php';
  
  // $email = filter_input(INPUT_POST, "correo");
  // $password = filter_input(INPUT_POST, "contraseña");
  $email = "fer@gmail.com";
  $password = "3312";
  $password = md5($password);
  
  $query = "SELECT * FROM usuario WHERE Correo = '".$email."' 
            AND Contraseña = '".$password."'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  var_dump($row);
  if($row){
    echo '1';
    }
  // }else{
  //   $queryDoc = "SELECT * FROM usuario WHERE Correo = '".$email."' 
  //                 AND Contraseña = '".$password."'";
  //   $resultDoc = $conn->query($queryDoc);
  //   if(mysqli_num_rows($resultDoc) == 1){
  //     echo '2';
  //   }
  // }
  mysqli_close($conn);
?>
