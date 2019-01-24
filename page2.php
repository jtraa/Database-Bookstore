<?php

    //CARD.PHP


    include "db_connection.php";


    $sql_querie = "SELECT harry_id, hp_publisher, hp_writer, hp_information, hp_image, hp_image2 FROM hp2";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {           
        echo '<div class="card debug">' .
             '<div class="h1">' .
                '<h2>' . $row['hp_writer'] . '</h2>' . 
             '</div>' .
             '<div class="Hoi">' .
            '<div class="flip-card">' .
                '<div class="flip-card-inner">' .
                    '<div class="flip-card-front">' .
                       '<a href= "index.php">' . '<img src="' . $row['hp_image'] . '" alt="' . $row['hp_publisher'] . '" style=width:100%">' .
                        //<img src=img\halfbloodprince.jpg style=width:100%>
                    '</div>' .
                    '<div class="flip-card-back">' .
                    '<img src="' . $row['hp_image2'] . '" alt="' . $row['hp_publisher'] . '" style=width:100%">' .
                        //<img src=img\halfbloodprince2.jpg style=width:100%>
                    '</div>' .
                    '</div>'.
                    '</a>' .
            '</div>'.
        '</div>'.
        '<div class="h2">' .
            '<h3>'. $row['hp_information'] . '<br>' . $row['hp_information'] . '+' . '<br>' . '€' . $row['hp_information'] . ',-' . '<br>' . '</h3>' .
         '</div>' .
    '</div>';

        
    }       

    $conn = null;
  
?>

