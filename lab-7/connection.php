<?php
    $mysqli = new mysqli("localhost", "root", "", "web_lab_e2");
 
    if ($mysqli->connect_error) {
        die("Connection Failed!". $mysqli->connect_error );
    }
    echo "Connected Successfully!";
?>