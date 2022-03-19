<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once('database.php');
    if (login($username, $password)) {
        session_start();
        $_SESSION['status'] = true;
        $_SESSION['username'] = $username;
        header('location: ../views/profile.php');
    } else
        header('location: ../views/login.php?error');
} else
    header('location: ../views/login.php?error');
