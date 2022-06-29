<?php

    session_start();
    require_once('connect_db.php');
    global $conn;

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    //vado a criptare la password con la funzione md5
    $password = md5($password);
    $query = "SELECT * FROM users_tests_phps WHERE email = '$email' AND password='$password'";
    $find_user = mysqli_query($conn, $query);
    if(mysqli_num_rows($find_user) == 1){
        //dichiaro le sessione che saranno visibili da altre pagine quando richiamate
        $_SESSION["email"] = $email;
        while($row = mysqli_fetch_assoc($find_user)){
            $_SESSION["username"] = $row["username"];
            $_SESSION["id_user"] = $row["id"];
        }
        header("location:/");
    }else{
        $_SESSION["error"]="Invalid credentials";
        header('location: /login'); 
        exit;
    }
    
?>