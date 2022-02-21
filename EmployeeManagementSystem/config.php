<?php
        $databaseHost = 'localhost';
        $databaseName = 'rec';
        $dbuname = 'root';
        $dbpassword = 'root';
        $mysqli = mysqli_connect($databaseHost,$dbuname,$dbpassword,$databaseName);
        if(!$mysqli){
            echo 'Connection failed to establish';
        }
        else{
            echo 'Connection established successfully';
        }
 ?>
                


