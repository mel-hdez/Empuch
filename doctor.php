<?php
header('Content-Type: application/json');
include 'dbconfig.php';
$menu = $_REQUEST['opcion'];
$id = $_REQUEST['id'];
$resultadoArray = array();

if($menu == "pacientes"){
  $mascotaQuery = "SELECT * FROM mascota WHERE id_usuario = '$id'";
  $mascotaResultado = mysqli_query($conn, $mascotaQuery);
  foreach($mascotaResultado as $row){
    $resultadoArray[] = $row;
  }
}

if($menu == "citas"){
  $citaQuery = "SELECT * FROM cita WHERE id_usuario = '$id'";
  $citaResultado = mysqli_query($conn, $citaQuery);
  foreach($citaResultado as $row){
    $resultadoArray[] = $row;
  }
}

if($menu == "factura"){
  $usuarioQuery = "SELECT * FROM usuario WHERE id_usuario = '$id'";
  $usuarioResultado = mysqli_query($conn, $usuarioQuery);
  foreach($usuarioResultado as $row){
    $resultadoArray[] = $row;
  }
}
echo json_encode($resultadoArray);
?>