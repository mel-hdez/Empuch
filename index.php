<?php

$url = parse_url(getenv("mysql://b28c61d6887e8d:2be748af@us-cdbr-iron-east-05.cleardb.net/heroku_71c0f8d00cb5a72?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
echo "se conecto";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$query = "select * from `heroku_71c0f8d00cb5a72`.`users` where username = 'fer' and password = '123'";
$result = $conn->query($query);
echo $result;

?>