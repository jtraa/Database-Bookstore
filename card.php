<?php

    //CARD.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT hp_id, hp_title, hp_genre, hp_age, hp_release, hp_price, hp_image, hp_image2 FROM hp";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo '<div class="card">' .
             
             

             '<h1>' . $row['hp_title']  . ' ' . $row['hp_genre'] . '</h1>' .
             '<a href="personpage.php?user_hp_id=' . $row['hp_id'] . '">' .
             '<img class="Hoi" src= "' . $row['hp_image'] . '" alt= "' . $row['hp_title'] . '" style="width:20%">' .
             //'<img class="hoi"'
             //'<img src="' . $row[include "img.php"] . '" alt="' . $row['hp_id'] . '" style="width:20%">' .
             //'<img src="' . $row[include "img2.php"] . '" alt="' . $row['hp_id'] . '" style="width:20%">' .
             '</a>' .
             '<p class="hp_release">' . $row['hp_release'] .  '</p>' .
             '<p class="hp_price">' .$row['hp_price'] . '</p>' .         
             '<p>J.K. Rowling</p>' .
             '</div>';
       
    }       

    $conn = null;
  
?>