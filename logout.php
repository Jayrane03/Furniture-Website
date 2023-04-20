<?php

session_start();
$_SESSION = array();

header("location: login2.php");
session_destroy();
?>
