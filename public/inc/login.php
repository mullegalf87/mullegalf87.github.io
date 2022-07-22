<?php

    session_start();
    require_once('connect_db.php');
    global $dbConn;

    $email = $_POST["email"];
    $password = $_POST["password"];

    //vado a criptare la password con la funzione md5
    $password = md5($password);
    $query = "SELECT * FROM users_tests_phps WHERE email = '$email' AND password='$password'";
 
    $find_user = queryPrepare($dbConn, $query);
        queryExecute($find_user);
        if (queryNumRows($find_user)){
            $_SESSION["email"] = $email;
            if ($find_user_enterprise = resultFetchAssoc($find_user)){
                $_SESSION["username"] = $find_user_enterprise["username"];
                $_SESSION["id_user"] = $find_user_enterprise["id"];
                header("location:/");
            }
        }else{
            $_SESSION["error"]="Invalid credentials";
            header('location: /login'); 
            exit;
        }
    
?>