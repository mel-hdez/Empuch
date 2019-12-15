<?php
header('Content-Type: application/json');
include 'dbconfig.php';
$menu = $_REQUEST['opcion'];
$id = $_REQUEST['id'];
$resultadoArray = array();

if($menu == "pacientes"){
  $pacienteQuery = "SELECT m.nombre, m.fecha_nac, m.alergias, m.peso, m.sexo, m.raza FROM mascota m
  INNER JOIN
  (cita c INNER JOIN veterinario v ON c.id_veterinario = v.id_veterinario)
   ON m.id_mascota = c.id_mascota 
   WHERE 	v.id_veterinario = '$id'
   GROUP BY nombre";
  $pacienteResultado = mysqli_query($conn, $pacienteQuery);
  foreach($pacienteResultado as $row){
    $resultadoArray[] = $row;
  }
}

if($menu == "citas"){
  $citaQuery = "SELECT * FROM cita c INNER JOIN mascota m
  ON c.id_mascota = m.id_mascota WHERE id_veterinario = '$id' AND estado = '0'";
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