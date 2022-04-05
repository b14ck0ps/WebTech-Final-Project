<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../../javascript/functionality.js" defer></script>
</head>

<body>
    <div class="users-table">
        <?php
        if ($_SESSION['filter'] == 'allStuffs')
            $users = getAllusers(1);
        else
            $users = getAllusers($_SESSION['filter']);
        echo "
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Rule</th>
            <th>Email</th>
            <th>Change Rule To</th>
            <th>Action</th>
            
        </tr>
        ";
        require_once('../model/usersModel.php');
        foreach ($users as $users) {
            echo "
                <tr id=#" . $users['id'] . ">
                    <td>{$users['id']}</td>
                    <td><a href='profile.php?username={$users['username']}'>{$users['f_name']}  {$users['l_name']}</a></td>
                    <td>{$users['username']}</td>
                    <td>" . strtoupper($users['userType']) . "</td>
                    <td>{$users['email']}</td>
                    <td>
                    <div class='userRule'>
                    " .
                ($users['userType'] == 'admin' ? "" : "<button id='u-cng'><a href='../controllers/changeUserRule.php?id={$users['id']}&newRule=admin'>ADMIN</a></button>")
                . "
                    " .
                ($users['userType'] == 'stuff' ? "" : "<button id='u-cng'><a href='../controllers/changeUserRule.php?id={$users['id']}&newRule=stuff'>STUFF</a></button>")
                . "
                    
                    " .
                ($users['userType'] == 'faculty' ? "" : "<button id='u-cng'><a href='../controllers/changeUserRule.php?id={$users['id']}&newRule=faculty'>FACULTY</a></button>")
                . "
                    </div>
                    </td>
                    <td><div class='userRule del'><a href='#delete'> <button id=" . $users['id'] . " onClick='getIdbyClick(this)'>REMOVE</button> </a></td>
                </tr>
                ";
        }
        ?>
        <div id="delete" class="deleteOverlay">
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