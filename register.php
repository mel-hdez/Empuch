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
    $userQUery = "INSERT INTO usuario(Nombre, Apellidos, Domicilio, Ciudad, NoCelular, Correo, Contrasena)
                  VALUES('$name','$lastname', '$address', '$city', '$cellphone', '$email', '$password')";
    $userResult = $conn->query($userQUery);
    if($userResult){
      echo "1";
    }
  } else if($type == '1'){
    $phd = filter_input(INPUT_POST, "cedula");
    $schedule = filter_input(INPUT_POST, "horario");

    $docQUery = "INSERT INTO veterinario(Nombre, Apellidos, Domicilio, Ciudad, No_Celular, Correo, Contrasena, CedulaProf, Horario)
                  VALUES('$name','$lastname', '$address', '$address', '$cellphone', '$email', '$password', '$phd', '$schedule')";
    $docResult = mysqli_query($conn, $docQUery);
    if($docResult){
      echo "1";
    }
  }

  $result = $conn->query($query);
  $
$conn->close();
?>
