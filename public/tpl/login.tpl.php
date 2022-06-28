<form id="form_login" method="POST" action="/inc/login.php">
    <div class="d-flex flex-wrap w-50 h-50 div_middle_page" style="background-color:aliceblue;justify-content: center;">
        <h3 class="w-100 text-center" style="margin-top: 50px;">Enter Login Details</h3>
        <?php if ($error != "") echo " <div class='button is-danger is-light'>$error</div>" ?>
        <div class="w-50">



            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($emailErrorMsg)) ? 'is-invalid' : ''; ?>" value="<?php echo $_SESSION["email"] ?>" placeholder="Email">
                <span class="invalid-feedback"><?php echo $emailErrorMsg; ?></span>
            </div>
            

            <?php if ($passwordErrorMsg != "") echo "<p class='is-size-6 is-danger is-light has-text-danger'>$passwordErrorMsg</p>" ?>
            <input type="password" name="password" placeholder="Password" class="form-control w-100 mb-3">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100 mb-3">
            <p>Don't have an account? <a class="color:blue" onclick="change_vis('form_register');">Register here</a></p>
        </div>
    </div>
</form>

<form id="form_register" method="POST" action="/inc/register.php" class="d-none">
    <div class="d-flex flex-wrap w-50 h-50 div_middle_page" style="background-color:aliceblue;justify-content: center;">
        <h3 class="w-100 text-center" style="margin-top: 50px;">Register</h3>
        <div class="w-50">
            <?php if ($usernameErrorMsg != "") echo "<p class='is-size-6 is-danger is-light has-text-danger'>$usernameErrorMsg</p>" ?>
            <input type="text" name="username" placeholder="Username" class="form-control w-100 mb-3">
            <?php if ($emailErrorMsg != "") echo "<p class='is-size-6 is-danger is-light has-text-danger'>$emailErrorMsg</p>" ?>
            <input type="email" name="email" placeholder="Email" class="form-control w-100 mb-3">
            <?php if ($passwordErrorMsg != "") echo "<p class='is-size-6 is-danger is-light has-text-danger'>$passwordErrorMsg</p>" ?>
            <input type="password" name="password" placeholder="Password" class="form-control w-100 mb-3">
            <?php if ($confirmPasswordErrorMsg != "") echo "<p class='is-size-6 is-danger is-light has-text-danger'>$confirmPasswordErrorMsg</p>" ?>
            <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control w-100 mb-3">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100 mb-3">
            <p>Do you have an account? <a class="color:blue" onclick="change_vis('form_login');">Login</a></p>
        </div>
    </div>
</form>