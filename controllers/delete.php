<?php
require_once('../model/usersmodel.php');
if (isset($_GET['id']) && isset(userinfobyId($_GET['id'])['username'])) {
    require_once('../model/usersModel.php');
    if (userinfobyId($_GET['id'])['username'])
        $picture = userinfobyId($_GET['id'])['username'];
    $def = userinfobyId($_GET['id'])['profile_picture'];
    if (deleteUser($_GET['id'])) {
        header("refresh:0 url= ../views/userManagement.php");
        header("location: ../views/userManagement.php");
        if ($def != '../assets/default/profile_picture.jpg')
            unlink("../assets/usersPicture/" . $picture  . ".jpg");
    } else {
        echo 'something went worng';
    }
} else {
    header("location: ../views/userManagement.php");
}
