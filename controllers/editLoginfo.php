<?php
if ($_POST['username'] != null && $_POST['new_password'] != null &&  $_POST['re_password'] != null) {
    require_once('../model/adminModel.php');
    if (updateLoginfo(
        $_POST['username'],
        $_POST['new_password'],
        $_POST['id']
    )) {
        $msg = 'success';
    }else{
        $msg = 'fail';
    }
    header("location: ../views/profile.php?username=" . $_POST['username'] . "&&msg={$msg}");
} else {
    echo "null submission";
}
