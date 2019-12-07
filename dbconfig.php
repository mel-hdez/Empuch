<?php
  $db_host = "us-cdbr-iron-east-05.cleardb.net";
  $db_user = "b28c61d6887e8d";
  $db_pass = "2be748af";
  $db_name = "heroku_71c0f8d00cb5a72";

  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
  if ($conn->connect_error) {
    echo "Fallo";
    die("Connection failed: " . $conn->connect_error);
  }
?>