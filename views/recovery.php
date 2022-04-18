<?php require_once('../controllers/checkJS.php'); ?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title> Portal </title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/form-validation.js" defer></script>
</head>

<body>
    <div class="login-container">
        <form class="login-form" id="login" action="../controllers/LoginCheck.php" method="post">
            <div class="heading-container">
                <h1 class="heading">Recovery</h1>
                <p>Enter your username to recover password:</p>
            </div>
            <div class="group login-input">
                <input type="username" name="username" placeholder="User name">
                <span class="error" id="username-error">The User Name field is required.</span>
                <span class="error" id="username-error-notexist">user dosen't exist <span>
            </div>
            <button class="loginBtn" type="submit" name="submit">Recover</button>
            <div class="group form-link">
                <a href="login.php">Go back </a>
            </div>
        </form>
    </div>
</body>

</html>