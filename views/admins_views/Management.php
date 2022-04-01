<?php
require_once('../controllers/pageAccess.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Index</title>
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
                        <level>Stuffs Information</level>
                    </div>
                </div>
                <?php
                $_SESSION['filter'] = 'allStuffs';
                include_once('managementList.php');
                ?>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/style.js" defer></script>
</body>

</html>