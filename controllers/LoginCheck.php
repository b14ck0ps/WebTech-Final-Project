<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once('../model/defaultModel.php');
    if (login($username, $password)) {
        session_start();
        $_SESSION['status'] = true;
        $_SESSION['username'] = $username;
        if (userinfo($username)['userType'] == 'admin')
            header('location: ../views/adminDashboard.php');
        else if (userinfo($username)['userType'] == 'stuff')
            header('location: ../views/stuffDashboard.php');
        else if (userinfo($username)['userType'] == 'faculty')
            header('location: ../views/facultyDashboard.php');
        else if (userinfo($username)['userType'] == 'student')
            header('location: ../views/studentDashboard.php');
        else
            echo "Error";
    } else
        header('location: ../views/login.php?msg=error');
} else
    header('location: ../views/login.php?msg=error');
