<?php
  include 'dbconfig.php';
  $opcion = $_REQUEST['opcion'];

  if($opcion == "registro"){

    $type = $_REQUEST['tipo'];
    $name = $_REQUEST['nombre'];
    $lastname = $_REQUEST['apellido'];
    $address = $_REQUEST['domicilio'];
    $city = $_REQUEST['ciudad'];
    $cellphone = $_REQUEST['celular'];
    $email = $_REQUEST['correo'];
    $password = $_REQUEST['contraseña'];
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
}

if($opcion == "mascota"){
  $name = $_REQUEST['nombre'];
  $date = $_REQUEST['fecha'];
  $sickness = $_REQUEST['alergias'];
  $weight = $_REQUEST['peso'];
  $kind = $_REQUEST['raza'];
  $id = $_REQUEST['id'];
  $sex = $_REQUEST['sexo'];

  $petQuery = "INSERT INTO mascota(nombre, fecha_nac, alergias, peso, sexo, id_usuario, raza)
                VALUES('$name','$date','$sickness','$weight','$sex','$id','$kind')";
  $petResult = mysqli_query($conn, $petQuery);
  if($petResult){
    echo "1";
  }
}
$conn->close();
?>
