<?php
require_once('../controllers/database.php');
function getAllNotices()
{
    global $conn;
    $sql = "SELECT * from notice_archive";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $notices[] = $row;
    }
    return $notices;
}
