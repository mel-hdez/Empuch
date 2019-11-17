<?php
  $username = filter_input(INPUT_POST, "username");
  $password = filter_input(INPUT_POST, "password");

  $mysqli = new mysqli("heroku_71c0f8d00cb5a72", "b28c61d6887e8d", "2be748af");

  $result = mysqli_query($mysqli, 
  "select * from `heroku_71c0f8d00cb5a72`.`users` where username = '".$username."' and password = '".$password."'");

  if($data = mysqli_fetch_array($result)){
    echo '1';
  }
?>