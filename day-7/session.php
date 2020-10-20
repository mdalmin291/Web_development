<?php
session_start();
$_SESSION['name']     = "alamin";
$_SESSION['city']     = "sarishabari";
$_SESSION['district'] ="Jamalpur";


echo $_SESSION['city'];
?>