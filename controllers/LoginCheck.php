<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once('../model/adminModel.php');
    if (login($username, $password)) {
        session_start();
        $_SESSION['status'] = true;
        $_SESSION['username'] = $username;
        // header('location: ../views/profile.php');
        header('location: ../views/adminDashboard.php');
    } else
        header('location: ../views/login.php?msg=error');
} else
    header('location: ../views/login.php?msg=error');
