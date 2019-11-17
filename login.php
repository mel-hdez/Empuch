<?php
  $username = filter_input(INPUT_POST, "username");
  $password = filter_input(INPUT_POST, "password");

  if($username == "fer" && $password == "123"){
    echo "1";
  }else{
    echo "2";
  }
?>