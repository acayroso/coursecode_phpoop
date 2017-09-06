<?php

    DEFINE('DB_USER','db_admin');
    DEFINE('DB_PWSD','db_password');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','db_php');

    $db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PWSD, DB_NAME);

    if($db_connection){
        echo "Database connection: success!";
    }else{
        die('Error connecting to database');
    }