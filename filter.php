<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

    //Filter.PHP

    
    include "db_connection.php";


    $sql_querie = "SELECT harry_id, hp_publisher, hp_writer, hp_information, hp_image, hp_image2 FROM hp2";
    
    $db_result = $conn->query($sql_querie);  


    //CARD.PHP

    
    include "db_connection.php";


    $sql_querie = "SELECT harry_id, hp_publisher, hp_writer, hp_information, hp_image, hp_image2 FROM hp2";
    
    $db_result = $conn->query($sql_querie);  
    
    
    if (!filter_has_var(INPUT_GET, "hp_publisher")) {
        echo("Email not found");
    } else {
        echo("Email found");
    }
  
?>
    
</body>
</html>