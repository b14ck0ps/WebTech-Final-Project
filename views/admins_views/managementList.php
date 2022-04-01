<!DOCTYPE html>
<html lang="en">

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
                ($users['userType'] == 'admin' ? "" : "<button>ADMIN</button>")
                . "
                    " .
                ($users['userType'] == 'stuff' ? "" : "<button>STUFF</button>")
                . "
                    
                    " .
                ($users['userType'] == 'faculty' ? "" : "<button>FACULTY</button>")
                . "
                    </div>
                    </td>
                    <td><div class='userRule del'><a href='#delete'> <button>REMOVE</button> </a></td>
                </tr>
                ";
        }
        ?>
        <div id="delete" class="overlay">
            <div class="popup">
                <h2>DELTE PERMANENTLY</h2>
                <div class="content">
                    <form action="" method="post">
                        <center>
                            <p>Are you sure you want to delete this user?</p>
                            <div class="del">
                                <input type="hidden" name="id" value="id">
                                <input type="submit" name="delete" value="Yes">
                            </div>
                        </center>
                        <a class="close" href="#">&times;</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>