<?php
header('Content-Type: application/json');
include 'dbconfig.php';
$menu = $_REQUEST['opcion'];
$id = $_REQUEST['id'];

if($menu == "mascota"){
  $petQuery = "SELECT * FROM mascota WHERE id_usuario = '$id'";
  $petResult = mysqli_query($conn, $petQuery);
  $petData = array();
  foreach($petResult as $row){
    $petData[] = $row;
  }
  mysqli_close($conn);
  echo json_encode($petData);
}

if($menu == "citas"){
  
}

if($menu == "historial"){

}

if($menu == "usuario"){

}
?>