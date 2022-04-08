<?php
require_once('../controllers/database.php');
function getResInfo($id)
{
    global $conn;
    $sql = "SELECT * FROM courses WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $info[] = $row;
    }
    return $info;
}
