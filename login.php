<?php
  $username = filter_input(INPUT_POST, "username");
  $password = filter_input(INPUT_POST, "password");

  $server = "us-cdbr-iron-east-05.cleardb.net";
  $dbuser = "b28c61d6887e8d";
  $dbpass = "2be748af";
  $db = "heroku_71c0f8d00cb5a72";

  $conn = new mysqli($server, $dbuser, $dbpass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
  $result = $conn->query($query);

  if($data = mysqli_fetch_array($result)){
    echo '1';
  }
$conn->close();
?>