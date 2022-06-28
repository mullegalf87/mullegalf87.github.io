<?php
    session_start();
    require_once('connect_db.php');
    global $conn;
    

    $error = "";
    $emailErrorMsg = "";
    $usernameErrorMsg = "";
    $passwordErrorMsg = "";
    $confirmPasswordErrorMsg = "";

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    //controllo se i dati inseriti ci sono e sono corretti
    if($email == ""){
        $emailErrorMsg = "Please enter the email"; 
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErrorMsg = "Please enter a valid email";  
    }
    if($password == ""){
        $passwordErrorMsg = "Enter your password";
    }

    //se il controllo è andato a buon fine e non ci sono errori
    if($emailErrorMsg == "" && $passwordErrorMsg == ""){
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
            $error = "Invalid credentials";
        }
    }

?>