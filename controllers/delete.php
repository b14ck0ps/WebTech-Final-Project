<?php
require_once('../model/usersmodel.php');
if (isset($_GET['id'])) {
    require_once('../model/usersModel.php');
    $picture = userinfobyId($_GET['id'])['username'];
    if (deleteUser($_GET['id'])) {
        if (unlink("../assets/usersPicture/" . $picture  . ".jpg")) {
            header("Refresh:0; url=../views/userManagement.php");
        }
    } else {
        echo 'something went worng';
    }
} else {
    echo "error";
}
