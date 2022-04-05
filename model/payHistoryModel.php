<?php
require_once('../controllers/database.php');
$date = date("Y-m-d");
function getFinInfo($id)
{
    global $conn;
    $sql = "SELECT * from payment_history WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row)
        return $row;
    else
        return False;
}
function finInfoInsert($id, $amount)
{
    global  $conn, $date;
    $sql = "INSERT payment_history (id,amount,date)  values ('{$id}','{$amount}','{$date}')";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function finInfoUpdate($id, $amount)
{
    global  $conn, $date;
    $sql = "UPDATE payment_history SET dept = '{$amount}' , date = '{$date}'WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function changeStudentStatus($id, $status)
{
    global  $conn;
    $sql = "UPDATE payment_history SET status = '{$status}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
