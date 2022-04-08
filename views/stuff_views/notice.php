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
                        <level>Notice</level>
                    </div>
                    <div class="add-notice-button">
                        <a href="#newNotice"><button>New</button></a>
                    </div>
                </div>
                <?php
                require_once('../model/noticeModel.php');
                $notices = getAllNotices();
                foreach ($notices as $notice) {
                    $author = userinfobyId($notice["id"]);
                    echo '
                    <!-- notice card -->
                    <div class="notice-board">
                        <div class="n-header">
                            <h1>' . $notice["title"] . '</h1>
                            <h4>' . $notice["date"] . '</h4>
                        </div>
                        <p>' . $notice["notice"] . '</p>
                        <div class="n-footer">
                            <div class="author">
                                <h4>Posted By: </h4>
                                <p>' . $author["f_name"] . ' ' . $author["l_name"] . '</p>
                            </div>
                            <div class="n-action">
                                <a href="#">
                                    <!---<button id="n-edit">
                                        Edit
                                    </button> ---!>
                                </a>
                                &ensp;&ensp;
                                <a href="#">
                                    <button id="n-del">
                                        Delete
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    ';
                }
                ?>
            </div>
            <div id="newNotice" class="noticeOverlay">
                <div class="popupNot">
                    <h2>Post a new Notice </h2>
                    <div class="content">
                        <div id="n-box">
                            <div><input type="text" name="notice_titel" id="n-title" placeholder="Title"></div>
                            <div><textarea name="notice" id="n-notice" placeholder="Notice"></textarea></div>
                            <div class="Post-btn"><button>POST</button></div>
                        </div>
                        <a class="close" href="#">&times;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js" defer></script>
</body>

</html>