<?php
require_once('../controllers/pageAccess.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Stuff_index</title>
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
                <div class="content-header">
                    <div class="title">
                        <level>Account Information</level>
                    </div>
                    <div class="filter">
                        <select name="filter" id="filter">
                            <option value="faculty" <?php if (isset($_GET['userType']) && $_GET['userType'] == 'faculty')  echo ' selected'; ?>>Faculty</option>
                            <option value="student" <?php if (isset($_GET['userType']) && $_GET['userType'] == 'student')  echo ' selected'; ?>>Student</option>
                        </select>
                    </div>
                </div>
                <?php
                if (isset($_GET['userType'])) {
                    if ($_GET['userType'] == 'admin') {
                        $_SESSION['filter'] = 'admin';
                        include_once('userslist.php');
                    } else if ($_GET['userType'] == 'stuff') {
                        $_SESSION['filter'] = 'stuff';
                        include_once('userslist.php');
                    } else if ($_GET['userType'] == 'faculty') {
                        $_SESSION['filter'] = 'faculty';
                        include_once('userslist.php');
                    } else if ($_GET['userType'] == 'student') {
                        $_SESSION['filter'] = 'student';
                        include_once('userslist.php');
                    } else {
                        echo "<center><h2>'" . $_GET['userType'] . "' USERTYPE DOSEN'T EXIST </h2></center>";
                    }
                } else {
                    $_SESSION['filter'] = 'faculty';
                    include_once('userslist.php');
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js" defer></script>
</body>

</html>