<?php

    //CARD.PHP

    
    include "db_connection.php";

    $id = $_GET['id'];

    //$sql_querie = "SELECT harry_id, hp_publisher, hp_writer, hp_information, hp_image, hp_image2 FROM hp2";
    // $sql_querie = "SELECT hp_publisher, hp_writer, hp_information, hp_image3, hp_image4, hp_title
    // FROM hp2 LEFT JOIN hp ON hp2.harry_id = hp.hp_id <--ORDER BY hp_title
    // WHERE hp_id = '$id'";
    //$jelle_querie = ""SELECT hp.hp_id,  hp.hp_title, hp.hp_genre, hp.hp_age, hp.hp_release, hp.hp_price, hp.hp_image, //hp.hp_image2, hp2.hp_publisher, hp2.hp_writer, hp2.hp_information, hp2.hp_image3, hp2.hp_image4, hp2.harry_id
    //FROM hp INNER JOIN hp2 ON hp.harry_id = hp2.harry_id
    //WHERE hp_id = '$id'"";
$jelle_querie = "SELECT * FROM hp2 WHERE harry_id=$id";
    
    $db_result = $conn->query($jelle_querie);  

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
                       '<a href= "index.php">' . '<img src="' . $row['hp_image3'] . '" alt="' . $row['hp_publisher'] . '" style=width:100%">' .
                        //<img src=img\halfbloodprince.jpg style=width:100%>
                    '</div>' .
                    '<div class="flip-card-back">' .
                    '<img src="' . $row['hp_image4'] . '" alt="' . $row['hp_publisher'] . '" style=width:100%">' .
                        //<img src=img\halfbloodprince2.jpg style=width:100%>
                    '</div>' .
                    '</div>'.
                    '</a>' .
            '</div>'.
        '</div>'.
        '<div class="h2">' .
            '<h3>'. $row['hp_information'] . '<br>' . $row['hp_information']  . '<br>' . $row['hp_information'] .  '<br>' . '</h3>' .
         '</div>' .
    '</div>';

        
    }       

    $conn = null;
  
?>

