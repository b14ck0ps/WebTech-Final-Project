<!DOCTYPE html>
<html lang="en">

<body>
    <div class="student-table">
    <?php
        //----- Display the table of students file ----------------------------------------------------
        // if ($_GET['filter'] == 'student') {
            echo "
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        ";
            require_once('../model/adminModel.php');
            $students = getAllstudent();
            foreach ($students as $student) {
                echo "
                <tr>
                    <td><a href='profile.php?username={$student['username']}'>{$student['id']}</a></td>
                    <td>{$student['last_name']}, {$student['first_name']}</td>
                    <td>{$student['email']}</td>
                    <td>{$student['status']}</td>
                </tr>
                ";
            } ?>
    </div>
</body>

</html>