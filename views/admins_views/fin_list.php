<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../../javascript/functionality.js" defer></script>
</head>

<body>
    <div class="users-table">
        <?php
        if ($_SESSION['filter'] == 'allStuffs')
            $users = getAllusers('student');
        else
            $users = getAllusers($_SESSION['filter']);
        echo "
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Depertment</th>
            <th>Status</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        ";
        require_once('../model/usersModel.php');
        require_once('../model/deptModel.php');
        require_once('../model/payHistoryModel.php');
        foreach ($users as $user) {
            $dept = getDept($user['id'])['dept'];
            $status = getFinInfo($user['id'])['status'];
            echo "
                <tr id=#" . $user['id'] . ">
                    <td>{$user['id']}</td>
                    <td><a href='#financials'>{$user['f_name']}  {$user['l_name']}</a></td>
                    <td>{$dept}</td>
                    <td>{$status}</td>
                    <td>{$user['email']}</td>
                    <td>
                    <div class='userRule'>
                    " .
                ($status == 'active' ? "" : "<button id='u-cng'><a href='../controllers/changeStudentStatus.php?id={$user['id']}&status=active'>ACTIVE</a></button>")
                . "
                    " .
                ($status == 'inactive' ? "" : "<button id='u-cng'><a href='../controllers/changeStudentStatus.php?id={$user['id']}&status=inactive'>INACTIVE</a></button>")
                . "
                    </div>
                    </td>
                </tr>
                ";
        }
        ?>
        <div id="delete" class="overlay">
            <div class="popup">
                <h2>DELTE PERMANENTLY</h2>
                <div class="content">
                    <center>
                        <p>Are you sure you want to delete this user?</p>
                        <div class="del">
                            <input type="submit" id="delAcc" value="Yes">
                        </div>
                    </center>
                    <a class="close" href="#">&times;</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>