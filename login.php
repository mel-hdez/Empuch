<?php
  include 'dbconfig.php';
  
  $correo = filter_input(INPUT_POST, "correo");
  $contra = filter_input(INPUT_POST, "contraseña");
  $contra = md5($contra);
  
  $query = "SELECT * FROM usuario WHERE Correo = '".$correo."' AND Contrasena = '".$contra."'";
  $resultado = $conn->query($query);
  $array = $resultado->fetch_array(MYSQLI_NUM);
  $row = $resultado->num_rows;
  if($row > 0){
    echo '1-'.$array[0];
  }else{
    $queryDoc = "SELECT * FROM veterinario WHERE Correo = '".$correo."' 
                  AND Contrasena = '".$contra."'";
    $resultadoDoc = $conn->query($queryDoc);
    $arrayDoc = $resultadoDoc->fetch_array(MYSQLI_NUM);
    $rowDoc = $resultadoDoc->num_rows;
    if($rowDoc > 0){
      echo '2-'.$arrayDoc[0];
    }
  }
  mysqli_close($conn);
?>
