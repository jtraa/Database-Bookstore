<?php

    //img.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT hp_image FROM hp LIMIT 1";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="Hoi">' .
             
             

             
             /*'<a href="personpage.php?user_hp_id=' . $row['hp_id'] . '">' .*/
             '<img src="' . $row['hp_image'] . '" alt="' . '" style="width:100%">' .
             //'</a>' .


             '</div>';
             
       
    }    

    $conn = null;
  
?>