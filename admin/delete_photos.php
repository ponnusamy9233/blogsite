<?php
include "../admin/externals/init.php";
$id = $_GET['id'];

$photos = Photo::show_by_id('photo',$id);

$photos->delete_img('photo');


?>