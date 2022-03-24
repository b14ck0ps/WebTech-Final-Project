<?php
require_once('../controllers/database.php');
function login($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM adminInfo WHERE username = '{$username}' AND password = '{$password}'";
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
    $sql = "SELECT * FROM adminInfo WHERE username = '{$username}'";
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
    $sql = "SELECT * FROM adminInfo WHERE username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return true;
    } else {
        return false;
    }
}
function registration($f_name, $l_name, $gender,$username,$password,$email,$phone,$address)
{
    global  $conn;
    $sql = "INSERT INTO adminInfo  (f_name,l_name,gender,username,password,email,phone,address)  values ('{$f_name}', '{$l_name}', '{$gender}','{$username}','{$password}','{$email}','{$phone}','{$address}')";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        header('lcoation: ../views/adminDashboard.php');
    } else
        header('lcoation: ../views/registration.php?msg=error');
}
function getAlladmin()
{
    global $conn;
    $sql = "SELECT * from adminInfo";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $student[] = $row;
    }
    return $student;
}
