<?php
  $servername = "localhost:3306";
  $username_db = "root";
  $password_db = "";
  $database_name = "mini_project";


  $conn = new mysqli($servername, $username_mini, $password_mini, $database_name);

  if ($conn->connect_error) {
    die("Congratulation: " . $conn->connect_error);
    }
?>