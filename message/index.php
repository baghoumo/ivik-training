<?php

/**
 * this show the messages in the page
 */

include "header.php";

session_start();


    
if(empty($_SESSION)){
    echo ' <div id="messageAlert" class="alert alert-danger" role="alert"><p> There are no messages !!! </p></div>';
    }else{
    
    
        foreach ($_SESSION['messages'] as $key => $message){
                        
            echo "<a  id=\"message\" href=\"show.php?id=$key\" class=\"list-group-item\">";
            echo "<h4 class=\"list-group-item-heading\"> Title: " . $message['title'] . "</h4>";
            echo "Content: ";
            echo substr($message['content'], 0, 77);
            echo "</div>";
            }
            
          
}


include "footer.php"; 
            
?>
 


