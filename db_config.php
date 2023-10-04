<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD','');
    define('DB_NAME','db_school');


    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if(!$con){
        echo "connection failed";
    }
    else{
        echo "connection succesful";
    }
?>  


