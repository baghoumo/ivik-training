<?php

/**
 * this show the messages in the page
 */

include "header.php";

session_start();


 
            
        foreach ($_SESSION['messages'] as $key => $message){
                        
            echo "<div id=\"message\" class=\"list-group\">";
            echo "<a href=\"show.php\" class=\"list-group-item\"><h4>". $message['title'] . "</h4></a>";
            echo "<p>". $message['content'] . "</p>";
            echo "</div>";
            }


include "footer.php"; 
            
?>
 


