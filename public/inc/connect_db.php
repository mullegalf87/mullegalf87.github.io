<?php

    $servername="127.0.0.1";
    $username="root";
    $password="AklkOodX0Rc7LVvs";
    $db="homelav";
    $conn=new mysqli($servername, $username, $password, $db);

    function connect_db(){
        //MySqli (object-oriented) connessione al db
        global $conn;

        if (!$conn) {

            $result=die(mysqli_connect_error());

        } else {

            $result="connected";
            
        }

        return $result;

    }
 
?>