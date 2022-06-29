<?php

    session_start();
    require_once('connect_db.php');
    global $conn;

    //The mysqli_real_escape_string() method helps to remove special characters from the string as they might cause malicious actions while performing query operations.
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirm-password"]);

    //controllo se la password corrisponde con il confirm password
    if($password!=$confirmPassword){
        $_SESSION["confirmPasswordErrorMsg"]="Password and Confirm Password field should be same";
        header('location: /login'); 
        exit;
    }
    
    //se il controllo è andato a buon fine e non ci sono errori
    if($error == "" && $emailErrorMsg == "" && $passwordErrorMsg == "" && $confirmPasswordErrorMsg == ""){
        $query = "SELECT * FROM users_tests_phps WHERE email = '$email'";
        $findUser = mysqli_query($conn, $query);
        $resultantUser = mysqli_fetch_assoc($findUser);
        if($resultantUser){
            $error = "User already exists";
        }
        //vado a criptare la password
        $password = md5($password);
        $query = "INSERT INTO users_tests_phps (username, email, password) VALUES('$username', '$email', '$password')";
        $insertUser = mysqli_query($conn, $query);

        //dichiaro le sessioni che saranno visibili da altre pagine quando richiamate
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['id_user'] = $conn->insert_id;
        header("location:/");
    }

?>    