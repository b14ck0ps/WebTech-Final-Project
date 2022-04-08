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
function postAnotice($title, $notice, $id, $date)
{
    global $conn;
    $sql = "INSERT INTO notice_archive (title, notice,id, date) VALUES ('{$title}', '{$notice}','{$id}', '{$date}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}
