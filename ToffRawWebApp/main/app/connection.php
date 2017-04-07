<?php
$conn = mysqli_connect($dbUrl, $dbUser, $dbPass, $dbDatabase);
if (!$conn) {
    if($isDebugEnv){
        echo mysqli_connect_error();
    }
    die('Could not connect into DB.');
    
} else {
    if($isDebugEnv){
        //echo 'Connected successfully </br>';
    }
}

mysqli_query($conn, "SET NAMES utf8");
//old: mysql_set_charset("UTF8", $conn);

// Set autocommit to off
mysqli_autocommit($conn,FALSE);
?>