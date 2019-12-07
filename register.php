<?php
  include 'db_config.php';
  $type = filter_input(INPUT_POST, "tipo");
  
  $name = filter_input(INPUT_POST, "nombre");
  $lastname = filter_input(INPUT_POST, "apellido");
  $address = filter_input(INPUT_POST, "domicilio");
  $city = filter_input(INPUT_POST, "ciudad");
  $cellphone = filter_input(INPUT_POST, "celular");
  $email = filter_input(INPUT_POST, "correo");
  $password = filter_input(INPUT_POST, "contraseña");
  $password = md5($password);
  
  if($type == '0'){
    $userQUery = "SELECT * FROM usuario WHERE Correo = '".$email."' AND Contraseña = '".$password."'";
    $userResult = mysqli_query($conn, $userQUery);
    $row = mysqli_fetch_array($userResult);
  } else if($type == '1'){
    $phd = filter_input(INPUT_POST, "cedula");
    $
    $docQUery = "SELECT * FROM usuario WHERE Correo = '".$email."' AND Contraseña = '".$password."'";
    $docResult = mysqli_query($conn, $docQUery);
    $row = mysqli_fetch_array($docResult);    
  }

  $result = $conn->query($query);

  if($data = mysqli_fetch_array($result)){
    echo '1';
  }
$conn->close();
?>
