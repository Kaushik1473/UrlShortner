<?php 


    $domain = "localhost/url/";
    $host = "localhost";
    $user = "root"; //Database username
    $pass = "Kd9038953389@"; //Database password
    $db = "db"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>