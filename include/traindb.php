<?php

    $server = 'sql304.epizy.com';
    $username='epiz_33121539';
    $password='532Q9JWxDsTnk';
    $dbname="epiz_33121539_traindb";

    $conn = mysqli_connect($server,$username, $password, $dbname);
    if(!$conn){
    die("connection failed:" .mysqli_connect_error());
    
    }


?>