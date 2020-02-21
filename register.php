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
  $contra = $_REQUEST['contraseña'];
  $contra = md5($contra);
  $correo = $_REQUEST['correo'];
  
  if($tipo == '0'){
    $revisarQuery = "SELECT * FROM usuario WHERE Correo = '$correo'";
    $revisarResultado = mysqli_query($conn, $revisarQuery);
        $usuarioQuery = "INSERT INTO usuario(Nombre, Apellidos, Domicilio, Ciudad, No_Celular, Correo, Contrasena)
                          VALUES('$nombre','$apellido', '$direccion', '$ciudad', '$telefono', '$correo', '$contra')";
        $userResult = mysqli_query($conn, $usuarioQuery);
        if($userResult){
          echo "1";
        }
    }else if($tipo == '1'){
    $revisarDoc = "SELECT * FROM veterinario WHERE Correo = '$correo'";
    $revisarDocResultado = mysqli_query($conn, $revisarDoc);
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
  $image = $_REQUEST['foto'];
  $mascotaQuery = "INSERT INTO mascota(nombre, fecha_nac, alergias, peso, sexo, id_usuario, raza, imagen_mascota)
                VALUES('$nombre','$fecha','$alergia','$peso','$sexo','$id','$raza', '$image')";
  $mascotaResultado = mysqli_query($conn, $mascotaQuery);
  if($mascotaResultado){
    echo "1";
  }
}

if($opcion == "cita"){
  $fecha = $_REQUEST['fecha'];
  $fecha = date('Y-m-d', strtotime($fecha));
  $malestar = $_REQUEST['malestar'];
  $mascota = $_REQUEST['mascota'];
  $doctor = $_REQUEST['doctor'];

  $citaQuery = "INSERT INTO cita(malestar, fecha_cit, id_mascota, id_veterinario)
                VALUES('$malestar','$fecha','$mascota','$doctor')";
  $citaResultado = mysqli_query($conn, $citaQuery);
  if($citaResultado){
    echo "1";
  }
}

$conn->close();
?>