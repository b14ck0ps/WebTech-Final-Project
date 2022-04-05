<?php
require_once('pageAccess.php');
if (isset($_GET['id'])) {
    require_once('../model/payHistoryModel.php');
    $_SESSION['studentFin'] =  getFinInfo($_GET['id']);
    header('Location: ../views/financials.php#financials');
} else {
    echo "err";
}
