<?php

include 'header.php';
session_start();


session_destroy();

header ('location: index.php');
exit;

include 'footer.php';
?>
