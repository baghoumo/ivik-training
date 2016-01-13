<?php

include 'header.php';
session_start();



//foreach ($_SESSION['messages'] as $key) {
 //  echo $key['title'];
   //echo "<br>";
  
//}

foreach($_SESSION['messages'] as $key => $value) {
    echo $key; // Would output "subkey" in the example array
    
}

include 'footer.php';

