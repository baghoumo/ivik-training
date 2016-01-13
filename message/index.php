<?php

/**
 * this show the messages in the page
 */

include "header.php";

session_start();


 
            
        foreach ($_SESSION['messages'] as $key){
                        
            echo "<div id=\"message\" class=\"list-group\">";
            echo "<a href=\"show.php\" class=\"list-group-item\"><h4>". $key['title'] . "</h4></a>";
            echo "<p>". $key['content'] . "</p>";
            echo "</div>";
            }


include "footer.php"; 
            
?>
 


