<?php
require_once('../controllers/pageAccess.php');
require_once('../model/usersModel.php');
require_once('../model/salaryModel.php');
$user = userinfo($_GET['username']);
$salary = getSalary($user['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../javascript/style.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>user profile</title>
</head>

<body>

    <div id="smallScreen"></div>
    <div class="desktop">
        <div class="container">
            <?php include_once('navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('sideNavbar.html') ?>
            <div class="main-body">
                <form action="../controllers/editUser_admin.php" method="post" enctype="multipart/form-data">
                    <div class="fullname"><?= strtoupper($user['l_name']) ?>, <?= strtoupper($user['f_name']) ?></div>
                    <div class="prfile-flex">
                        <div class="info-text">
                            <div class="edit-admin-profile">
                                <label for="f_name">First Name: </label>
                                <input type="text" name="f_name" value="<?= $user['f_name'] ?>"></input>
                            </div>
                            <div class="edit-admin-profile">
                                <label for="l_name">First Name: </label>
                                <input type="text" name="l_name" value="<?= $user['l_name'] ?>"></input>
                            </div>
                            <input type="hidden" name="username" value="<?= $user['username'] ?>"></input>
                            <div class="edit-admin-profile edit">
                                <label for="gender">Gender: </label>
                                <input type="radio" name="gender" value="Male" <?php if ($user['gender'] == 'Male')  echo ' checked="checked"'; ?>>
                                <label>Male</label>
                                <input type="radio" name="gender" value="Female" <?php if ($user['gender'] == 'Female')  echo ' checked="checked"'; ?>>
                                <label>Female</label>
                                <input type="radio" name="gender" value="Other" <?php if ($user['gender'] == 'Other')  echo ' checked="checked"'; ?>>
                                <label>Other</label>
                                <!-- optional -->
                            </div>
                            <div class="edit-admin-profile">
                                <label for="dob">Date of Birth: </label>
                                <input type="date" name="dob" value="<?= $user['dob'] ?>"></input>
                            </div>
                            <div class="edit-admin-profile">
                                <label for="email">Email: </label>
                                <input type="text" name="email" value="<?= $user['email'] ?>"></input>
                            </div>
                            <div class="edit-admin-profile">
                                <label for="phone">Phone: </label>
                                <input type="text" name="phone" value="<?= $user['phone'] ?>"></input>
                            </div>
                            <div class="edit-admin-profile">
                                <label for="salary">Salary: </label>
                                <input type="text" name="salary" value="<?= $salary['salary'] ?>" <?php if($_SESSION['username'] == $user['username']) echo 'readonly'; ?>></input>
                            </div>
                            <div class="edit-admin-profile">
                                <label for="address">Address: </label>
                                <input type="text" name="address" value="<?= $user['address'] ?>"></input>
                            </div>
                        </div>
                        <div class="profile-picture">
                            <img id="profile_picture" src="<?= $user['profile_picture'] ?>" alt="profile picture">
                            <input type="hidden" name="pre_profile_picture" value="<?= $user['profile_picture'] ?>">
                            <div class="upload">
                                <input type="file" name="profile_picture" id="">
                                <button name="update" class="editbtn">Upload</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <button name="update" class="editbtn">UPDATE</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>