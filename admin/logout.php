<?php
ob_start();
include "./externals/init.php";

$session->logout_condition();
header('location:../admin/login.php');



?>