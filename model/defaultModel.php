<?php
require_once('../controllers/database.php');
function login($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM usersLoginInfo WHERE username = '{$username}' AND password = '{$password}'";
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
    $sql = "SELECT * FROM usersLoginInfo WHERE username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row)
        return $row;
    else
        echo "Error";
}
