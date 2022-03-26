<?php
require_once('../controllers/pageAccess.php');
require_once('../model/adminModel.php');
$user = userinfo($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
                <form action="../controllers/editLoginfo.php" method="post">
                    <div class="fullname"> User ID : <?= $user['id'] ?></div>
                    <div class="prfile-flex">
                        <div class="info-text">
                            <div class="edit-admin-profile">
                                <label for="username">Username: </label>
                                <input type="text" name="username" value="<?= $user['username'] ?>"></input>
                            </div>
                            <div class="edit-admin-profile">
                                <label for="password">New Password: </label>
                                <input type="password" name="new_password"></input>
                            </div>
                            <div class="edit-admin-profile">
                                <label for="password">Re-Password: </label>
                                <input type="password" name="re_password"></input>
                            </div>
                            <div class="group">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <button name="update" class="editbtn">UPDATE</a></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="../javascript/style.js"></script>
</body>

</html>