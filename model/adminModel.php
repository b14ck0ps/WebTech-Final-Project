<?php
require_once('../controllers/database.php');
function login($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return true;
    } else {
        return false;
    }
}
function userinfo($username)
{
    global $conn;
    $sql = "SELECT * FROM userinfo WHERE username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row)
        return $row;
    else
        echo "Error";
}
function isUserTaken($username)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return true;
    } else {
        return false;
    }
}
function registration($id, $username, $password, $first_name, $last_name, $gender, $email, $phone)
{
    global  $conn;
    $sql = "INSERT INTO userinfo (id , username, password, first_name,last_name, gender , email, phone)  values ('{$id}','{$username}'  , '{$password}' , '{$first_name}', '{$last_name}' , '{$gender}' , '{$email}' , '{$phone}' )";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        header('lcoation: ../views/adminDashboard.php');
    } else
        header('lcoation: ../views/registration.php?msg=error');
}
function getAllstudent()
{
    global $conn;
    $sql = "SELECT * from userinfo";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $student[] = $row;
    }
    return $student;
}
