<!DOCTYPE html>
<html lang="en">

<body>
    <div class="users-table">
        <?php
        $users = getAllusers($_SESSION['filter']);
        echo "
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        ";
        require_once('../model/usersModel.php');
        foreach ($users as $users) {
            echo "
                <tr>
                    <td>{$users['id']}</td>
                    <td><a href='profile.php?username={$users['username']}'>{$users['f_name']}  {$users['l_name']}</a></td>
                    <td>{$users['username']}</td>
                    <td>{$users['email']}</td>
                </tr>
                ";
        }
        ?>
    </div>
</body>

</html>