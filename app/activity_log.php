<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Title</title>
    </head>
    <body>
        <form name="login" action="activity_log.php" method="POST">
	         	 Activity <input type="text" name="activity" value="" /><br/>
            			 <input type="submit" value="Submit" /><br/>
        </form>
    </body>
</html>

<?php
    include 'connect_mysql.php';
    
    var_dump($_POST);
    
    $activity = $_POST['activity'];
    $timestamp = date('n/d/y h:i:s A');

//    $data['activity'] = $_POST['activity'];
//    $data['timestamp'] = date('n/d/y h:i:s A');
//    
// var_dump($data);


$sql_insert = "INSERT INTO time_logs (activity) VALUES ('{$activity}')";

if(!mysqli_query($db_connection, $sql_insert)){

    echo "Record inserted";
}




//
//$sql_result = mysqli_fetch_array($sql_data, MYSQLI_ASSOC);
//
//var_dump($sql_result);
//
//if($sql_result != NULL){
//    echo "Login successful";
//}
    
?>