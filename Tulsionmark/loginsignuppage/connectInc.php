<?php
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DB_NAME","tulsionmark");
    
    $conn=new mysqli(HOSTNAME,USERNAME,PASSWORD,DB_NAME);
    
    if($conn->connect_errno)
    {
        echo("<br/>Failed to connect to mysql:".$conn->connect_error);
        die('<br/>Program terminated');
    }
?>