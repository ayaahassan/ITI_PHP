<?php
session_start();
echo "your private page";
$email = isset($_SESSION['use']) ? $_SESSION['use'] : null;
if (!isset($email)) {
    header("Location: login.php");
    die;
}