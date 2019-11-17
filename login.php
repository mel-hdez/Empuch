<?php
  include_once 'config.php';

  $username = filter_input(INPUT_POST, "username");
  $password = filter_input(INPUT_POST, "password");

  $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
  $result = $conn->query($query);

  if($data = mysqli_fetch_array($result)){
    echo '1';
  }
$conn->close();
?>