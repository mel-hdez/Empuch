<?php
  $username = filter_input(INPUT_POST, "username");
  $password = filter_input(INPUT_POST, "password");

    $url = parse_url(getenv("mysql://b28c61d6887e8d:2be748af@us-cdbr-iron-east-05.cleardb.net/heroku_71c0f8d00cb5a72?reconnect=true"));

  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);

  $conn = new mysqli($server, $username, $password, $db);


  $query = "select * from `heroku_71c0f8d00cb5a72`.`users` where username = '".$username."' and password = '".$password."'";
  $result = $conn->query($query);

  if($data = mysqli_fetch_array($result)){
    echo '1';
  }
  $conn->close();
?>