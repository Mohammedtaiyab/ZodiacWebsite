<?php
require("include/functions.php");
if (!isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] != 1 || !$_SESSION['admin'] != true) {
        header('location: login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Zodiac Zone</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo2.png" />
    <script src="assets/js/loader.js"></script>