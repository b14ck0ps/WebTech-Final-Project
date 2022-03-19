<?php
if (
    $_POST['username'] != null && $_POST['password'] != null && $_POST['first_name'] != null && $_POST['last_name'] != null
    && $_POST['gender'] && $_POST['email'] && $_POST['phone']
) {
    require_once('database.php');
    registration(
        $_POST['username'],
        $_POST['password'],
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['gender'],
        $_POST['email'],
        $_POST['phone']
    );
    header('lcoation: login.php');
} else {
    echo "null submission";
}
