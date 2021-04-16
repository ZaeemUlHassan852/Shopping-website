<?php
require('connection.php');
require('cartopr.php');
unset ($_SESSION['user_login']);
unset ($_SESSION['user_id']);
unset ($_SESSION['user_name']);
header('location:index.php');
die();
?>