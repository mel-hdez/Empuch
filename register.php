<?php
  include 'dbconfig.php';
  $opcion = $_REQUEST['opcion'];

  if($opcion == "registro"){

    $tipo = $_REQUEST['tipo'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $direccion = $_REQUEST['domicilio'];
    $ciudad = $_REQUEST['ciudad'];
    $telefono = $_REQUEST['celular'];
    $correo = $_REQUEST['correo'];
    $contra = $_REQUEST['contraseña'];
    $contra = md5($contra);
    
    if($tipo == '0'){
      $usuarioQuery = "INSERT INTO usuario(Nombre, Apellidos, Domicilio, Ciudad, No_Celular, Correo, Contrasena)
                  VALUES('$nombre','$apellido', '$direccion', '$ciudad', '$telefono', '$correo', '$contra')";
                  echo $usuarioQuery;
    $userResult = mysqli_query($conn, $usuarioQuery);
    if($userResult){
      echo "1";
    }
  } else if($tipo == '1'){
    $cedula = filter_input(INPUT_POST, "cedula");
    $horario = filter_input(INPUT_POST, "horario");
    
    $docQuery = "INSERT INTO veterinario(Nombre, Apellidos, Domicilio, Ciudad, No_Celular, Correo, Contrasena, CedulaProf, Horario)
                  VALUES('$nombre','$apellido', '$direccion', '$direccion', '$telefono', '$correo', '$contra', '$phd', '$schedule')";
    $docResultado = mysqli_query($conn, $docQuery);
    if($docResultado){
      echo "1";
    }
  }
}

if($opcion == "mascota"){
  $nombre = $_REQUEST['nombre'];
  $fecha = $_REQUEST['fecha'];
  $fecha = date('Y-m-d', strtotime($fecha));
  $alergia = $_REQUEST['alergias'];
  $peso = $_REQUEST['peso'];
  $raza = $_REQUEST['raza'];
  $id = $_REQUEST['id'];
  $sexo = $_REQUEST['sexo'];
  $mascotaQuery = "INSERT INTO mascota(nombre, fecha_nac, alergias, peso, sexo, id_usuario, raza)
                VALUES('$nombre','$date','$alergia','$peso','$sexo','$id','$raza')";
  $mascotaResultado = mysqli_query($conn, $mascotaQuery);
  if($mascotaResultado){
    echo "1";
  }
}

if($opcion == "cita"){
  $fecha = $_REQUEST['fecha'];
  $fecha = date('Y-m-d', strtotime($fecha));
  $diagnostico = $_REQUEST['diagnostico'];
  $mascota = $_REQUEST['mascota'];

  $citaQuery = "INSERT INTO mascota(nombre, fecha_nac, alergias, peso, sexo, id_usuario, raza)
                VALUES('$nombre','$date','$alergia','$peso','$sexo','$id','$raza')";
  $mascotaResultado = mysqli_query($conn, $mascotaQuery);
  if($mascotaResultado){
    echo "1";
  }
}
$conn->close();
?>
