<?php
    session_start();
    //session login
    if(isset($_SESSION['error'])){
        $error=$_SESSION['error'];
    }
    //session register
    if(isset($_SESSION['confirmPasswordErrorMsg'])){
        $confirmPasswordErrorMsg=$_SESSION['confirmPasswordErrorMsg'];
    }
?>

<div class="d-flex flex-wrap w-50 h-50 div_middle_page" style="background-color:aliceblue;justify-content: center;">
    <form id="form_login" method="POST" action="/inc/login.php">
        <h3 class="w-100 text-center p-3">Login</h3>
        <?php echo " <label class='text-center' style='color:red'>$error</label>" ?>
        <input type="email" name="email" placeholder="Email" class="form-control w-100 mb-3" required>
        <input type="password" name="password" placeholder="Password" class="form-control w-100 mb-3" required minlength="6">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100 mb-3">
        <p>Don't have an account? <a class="color:blue" onclick="change_vis_form('form_register');">Register here</a></p>
    </form>
    <form id="form_register" method="POST" action="/inc/register.php" class="d-none">
        <h3 class="w-100 text-center p-3">Register</h3>
        <input type="text" name="username" placeholder="Username" class="form-control w-100 mb-3" required>
        <input type="email" name="email" placeholder="Email" class="form-control w-100 mb-3" required>
        <input type="password" name="password" placeholder="Password" class="form-control w-100 mb-3" required minlength="6">
        <?php echo "<p class='is-size-6 is-danger is-light has-text-danger'>$confirmPasswordErrorMsg</p>" ?>
        <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control w-100 mb-3" required minlength="6">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100 mb-3">
        <p>Do you have an account? <a class="color:blue" onclick="change_vis_form('form_login');">Login</a></p>
    </form>
</div>