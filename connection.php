<?php
  define('DB_SERVER','localhost');
  define('DB_PASSWORD','');
  define('DB_USERNAME','root');
  define('DB_DATABASE','login');
  $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }
?>