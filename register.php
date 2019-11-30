<?php
  include_once 'db_config.php';

  $usuario = $_POST["usuario"];
  $contraseña = $_POST["contraseña"];
  $correo = $_POST["correo"];
  $registerQuery = "INSERT INTO users (username, password)
    VALUES('$usuario', '$contraseña')";
  
  $result = $conn->query($registerQuery);
  if($result){
    echo "Usuario registrado!";
  }else{
    echo "A ocurrido un error inesperado";
  }
  $conn->close();
?>