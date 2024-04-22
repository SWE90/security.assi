<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass ="";
    $db_name = "slaehDB";
    $conn = "";
  

    try{
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    }
   catch (Exception $e){
    echo "Colud not connect!";
   }
    if($conn){
        echo"you are connected";
    }
    
?>