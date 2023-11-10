<?php
    $mysqli = new mysqli("localhost", "root", "", "aozada_ecommerce_web");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
?>