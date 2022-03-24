<!DOCTYPE html>
<html lang="en">

<body>
    <div class="admin-table">
    <?php
        //----- Display the table of admins file ----------------------------------------------------
        // if ($_GET['filter'] == 'admin') {
            echo "
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        ";
            require_once('../model/adminModel.php');
            $admins = getAlladmin();
            foreach ($admins as $admin) {
                echo "
                <tr>
                    <td><a href='profile.php?username={$admin['username']}'>{$admin['id']}</a></td>
                    <td>{$admin['f_name']}  {$admin['l_name']}</td>
                    <td>{$admin['username']}</td>
                    <td>{$admin['email']}</td>
                </tr>
                ";
            } ?>
    </div>
</body>

</html>