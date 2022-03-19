<?php
session_start();
unset($_SESSION['status']);
header('location: ../views/login.php');