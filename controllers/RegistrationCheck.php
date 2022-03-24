<?php
if (
    $_POST['f_name'] != null && $_POST['l_name'] != null && $_POST['gender'] != null && $_POST['username'] != null
    && $_POST['password'] != null && $_POST['email'] != null && $_POST['phone'] != null &&  $_POST['address'] != null
) {
    require_once('../model/adminModel.php');
    registration(
        $_POST['f_name'],
        $_POST['l_name'],
        $_POST['gender'],
        $_POST['username'],
        $_POST['password'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['address']
    );
} else {
    echo "null submission";
}
// $f_name, $l_name, $gender,$username,$password,$email,$phone,$address