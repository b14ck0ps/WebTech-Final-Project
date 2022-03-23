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
            <?php include_once('navbar.html') ?>
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
                                <option value="student">Student</option>
                                <option value="stuff">Stuff</option>
                                <option value="admin">Admin</option>
                                <option value="faculty">Faculty</option>
                            </select>
                        </div>
                    </div>
                    <?php include_once('studentList.php') ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../javascript/style.js"></script>
</body>

</html>