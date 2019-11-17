<?php

$server = "us-cdbr-iron-east-05.cleardb.net";
$username = "b28c61d6887e8d";
$password = "2be748af";
$db = "heroku_71c0f8d00cb5a72";

$conn = new mysqli($server, $username, $password, $db);
if (!$conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "ya ta";

$query = "select * from heroku_71c0f8d00cb5a72.users where username = 'fer' and password = '123'";
$result = $conn->query($query);
echo $result;

?>