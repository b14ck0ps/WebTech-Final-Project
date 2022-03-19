<?php
function login($username , $password){
    $conn = mysqli_connect("localhost" , "root" , "" , "testdb");
    $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;
    }else{
        return false;
    }
}
function userinfo($username){
    $conn = mysqli_connect("localhost" , "root" , "" , "testdb");
    $sql = "SELECT * FROM userinfo WHERE username = '{$username}'";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    if($row)
        return $row;
    else
        echo "Error";
}
function isUserTaken($username){
    $conn = mysqli_connect("localhost" , "root" , "" , "testdb");
    $sql = "SELECT * FROM users WHERE username = '{$username}'";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        return true;
    }else{
        return false;
    }
}
function registration($username  , $password , $first_name, $last_name , $gender , $email , $phone ){
    $conn = $conn = mysqli_connect("localhost" , "root" , "" , "testdb");
    $sql = "INSERT INTO userinfo (username, password, first_name,last_name, gender , email, phone)  values ('{$username}'  , '{$password}' , '{$first_name}', '{$last_name}' , '{$gender}' , '{$email}' , '{$phone}' )";
    $reg = mysqli_query($conn,$sql);
    if($reg)
        echo "Reg complete";
    else
        echo "Error";
}