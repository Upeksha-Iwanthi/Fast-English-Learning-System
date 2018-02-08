<?php
session_start();
$count = $_POST['count'];
$_SESSION['count'] = $count;
?>