<?php

  $server = "us-cdbr-iron-east-05.cleardb.net";
  $username = "b28c61d6887e8d";
  $password = "2be748af";
  $db = "heroku_71c0f8d00cb5a72";

  $conn = new mysqli($server, $username, $password, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query = "SELECT * FROM users WHERE username='fer' AND password='123'";
  $result = $conn->query($query);

  echo $result;
  if($data = mysqli_fetch_array($result)){
    echo '1';
  }
  /*if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["iduser"]."</td><td>".$row["username"]." ".$row["password"]."</td></tr>";
  }
  echo "</table>";
  } else {
  echo "0 results";
  }*/
  $conn->close();
?>