<?php

include 'connect_mysql.php';

$username = $_POST['username'];
$password = $_POST['password'];

var_dump($_POST);

$sql_query = "SELECT * FROM credentials WHERE username = '{$username}' AND password = '{$password}'";

$sql_data = mysqli_query($db_connection, $sql_query);

var_dump($sql_data);

$sql_result = mysqli_fetch_array($sql_data, MYSQLI_ASSOC);

var_dump($sql_result);

if($sql_result != NULL){
    echo "Login successful";
}

?>

