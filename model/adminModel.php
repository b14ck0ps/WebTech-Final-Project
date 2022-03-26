<?php
require_once('../controllers/database.php');
function login($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM admin_info WHERE username = '{$username}' AND password = '{$password}'";
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
    $sql = "SELECT * FROM admin_info WHERE username = '{$username}'";
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
    $sql = "SELECT * FROM admin_info WHERE username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return true;
    } else {
        return false;
    }
}
function registration($f_name, $l_name, $gender, $dob, $username, $password, $email, $phone, $address, $profile_picture)
{
    global  $conn;
    $sql = "INSERT INTO admin_info  (f_name,l_name,gender,dob,username,password,email,phone,address,profile_picture)  values ('{$f_name}', '{$l_name}', '{$gender}','{$dob}','{$username}','{$password}','{$email}','{$phone}','{$address}','{$profile_picture}')";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        header('location: ../views/adminDashboard.php');
    } else
        header('location: ../views/registration.php?msg=error');
}
function getAlladmin()
{
    global $conn;
    $sql = "SELECT * from admin_info";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $student[] = $row;
    }
    return $student;
}
function userUpdate($f_name, $l_name, $gender, $dob, $username, $email, $phone, $address, $profile_picture)
{
    global  $conn;
    $sql = "UPDATE admin_info SET f_name = '{$f_name}',l_name = '{$l_name}',gender = '{$gender}',dob = '{$dob}',email = '{$email}',phone = '{$phone}',address = '{$address}',profile_picture = '{$profile_picture}' WHERE username = '{$username}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function updateLoginfo($username, $password, $id)
{
    global  $conn;
    $sql = "UPDATE admin_info SET username = '{$username}',password = '{$password}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
