<?php
require_once('../controllers/pageAccess.php');
require_once('../model/salaryModel.php');
require_once('../model/usersmodel.php');
require_once('upload.php');
if (
    $_POST['f_name'] != null && $_POST['l_name'] != null &&  $_POST['username'] != null
    && $_POST['password'] != null && $_POST['email'] != null && $_POST['phone'] != null
) {
    if (!isset($_POST['gender']))
        $_POST['gender'] = 'N/A';
    if ($_POST['address'] == null) {
        $_POST['address'] = 'N/A';
    }
    require_once('../model/usersModel.php');
    if (registration(
        $_POST['userType'],
        $_POST['f_name'],
        $_POST['l_name'],
        $_POST['gender'],
        $_POST['dob'],
        $_POST['username'],
        $_POST['password'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['address']
    )) {
        if (!isset($_FILES['profile_picture']) || $_FILES['profile_picture']['name'] == '')
            $profile_pic_link = '../assets/default/profile_picture.jpg';
        else {
            if (upload($_FILES['profile_picture'], '../assets/usersPicture/', userinfo($_POST['username'])['id'])) {
                $profile_pic_link = '../assets/usersPicture/' . userinfo($_POST['username'])['id'] . '.jpg';
            } else {
                $profile_pic_link = '../assets/default/profile_picture.jpg';
                //upload fail so use default place holder
            }
        }
        updateProfilePicture(userinfo($_POST['username'])['id'], $profile_pic_link);
        if ($_POST['userType'] != 'student') {
            $sal = mt_rand(300000 * 10, 900000 * 10) / 10;
            salaryInsert(userinfo($_POST['username'])['id'], $sal);
        } {
            //Inster student's initial data.. like -> depertment , subject , balance , etc..
        }
        header('location: ../views/Dashboard.php');
    }
} else {
    echo "null submission";
}
