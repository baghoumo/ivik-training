<?php

session_start();

foreach ($_SESSION['messages'] as $key => $message) {
    echo $message['title'] . '</ br>';
    //echo $message['content'];
}


