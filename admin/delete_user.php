<?php
include "../admin/externals/init.php";
$id = $_GET['id'];

$users = User::show_by_id('users',$id);

if($users->delete('users')){
    header('location:users.php');
}


?>