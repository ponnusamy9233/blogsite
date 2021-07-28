<?php

ob_start();
include "externals/leftbar.php";
include "externals/header.php";
include "externals/alert.php";

if(isset($_POST['upload'])){
   
   

   $photo = new Photo();
   
   $photo->title = $_POST['title'];
   $photo->upload_image($_FILES['image']);

   

   
   
}

?>



                   <!-- Bar Chart -->
                
                   <div class="card shadow mb-4">
                <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Upload</h6>
            </div>
            <div class="card-body">

<form action="profile.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title">Username</label>
<input type="text" value="" class="form-control" name="title">
</div>

<div class="form-group">
<label for="post_image">Image</label><br>
<input type="file" name="image">
</div>

<div class="form-group">
<input type="submit" value="Upload" class="btn btn-primary" name="upload">
</div>
</form>

</div>
          </div>
        </div>


