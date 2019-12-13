<?php
header('Content-Type: application/json');
include 'dbconfig.php';

$menu = $_REQUEST['opcion'];
$resultadoArray = array();

if($menu == "mascota"){
  $id = $_REQUEST['id'];
  $mascotaQuery = "SELECT id_mascota,nombre FROM mascota WHERE id_usuario = '$id'";
  $mascotaResultado = mysqli_query($conn, $mascotaQuery);
  foreach($mascotaResultado as $row){
    $resultadoArray[] = $row;
  }
}

if($menu == "doctor"){
  $citaQuery = "SELECT id_veterinario, Nombre, Apellidos FROM veterinario";
  $citaResultado = mysqli_query($conn, $citaQuery);
  foreach($citaResultado as $row){
    $resultadoArray[] = $row;
  }
}

echo json_encode($resultadoArray);
?>