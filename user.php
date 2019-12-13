<?php
header('Content-Type: application/json');
include 'dbconfig.php';
$menu = $_REQUEST['opcion'];
$id = $_REQUEST['id'];

if($menu == "mascota"){
  $mascotaQuery = "SELECT * FROM mascota WHERE id_usuario = '$id'";
  $mascotaResultado = mysqli_query($conn, $mascotaQuery);
  $mascotaInfo = array();
  foreach($mascotaResultado as $row){
    $mascotaInfo[] = $row;
  }
  mysqli_close($conn);
  echo json_encode($mascotaInfo);
}

if($menu == "citas"){
  $citaQuery = "SELECT * FROM cita WHERE id_usuario = '$id'";
  $citaResultado = mysqli_query($conn, $citaQuery);
  $citaInfo = array();  
  foreach($citaResultado as $row){
    $citaInfo[] = $row;
  }
  mysqli_close($conn);
  echo json_encode($citaInfo);
}

if($menu == "historial"){

}

if($menu == "usuario"){
  $usuarioQuery = "SELECT * FROM usuario WHERE id_usuario = '$id'";
  $usuarioResultado = mysqli_query($conn, $usuarioQuery);
  $usuarioInfo = array();
  foreach($usuarioResultado as $row){
    $usuarioInfo[] = $row;
  }
  var_dump($usuarioInfo);
  mysqli_close($conn);
  echo json_encode($usuarioInfo);
}
?>