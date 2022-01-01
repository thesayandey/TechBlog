<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; //default password
    $database = "techblog";

    $con = mysqli_connect($servername, $username, $password, $database);
    if($con == false){
        echo "Not connected :(";
    }
    // else{
    //     echo "connected :)";
    // }
?>