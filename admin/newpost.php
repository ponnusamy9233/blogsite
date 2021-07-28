<?php

session_start();
ob_start();
include "externals/leftbar.php";
include "externals/header.php";
include "../externals/db.php";
include "externals/alert.php";


if(isset($_POST['add_post'])){

    $add_post_title = $_POST['post_title'];
    $add_post_catagory = $_POST['post_catagory_id'];
    $add_post_author = $_POST['post_author'];
    $add_post_status = $_POST['post_status'];
    $add_image = $_FILES['image']['name'];
    $add_image_temp = $_FILES['image']['tmp_name'];
    $add_post_tag = $_POST['post_tags'];
    $add_post_content= $_POST['post_content'];

    move_uploaded_file($add_image_temp, "../img/posts/$add_image");

    $add_post_query ="INSERT INTO posts(post_title,post_catagory_id,post_author,post_status
                      ,post_image,post_tags,post_content) VALUES('$add_post_title','$add_post_catagory','$add_post_author',
                       '$add_post_status','$add_image' , '$add_post_tag','$add_post_catagory')";

    $add_post_result = mysqli_query($con , $add_post_query) or die(mysqli_error($add_post_query));


  
    $_SESSION['message'] = "Your Record has saved!";
    $_SESSION['msg_type'] ="success";
   
    
}


?>
                   <!-- Bar Chart -->
                   <div class="card shadow mb-4">
                <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Create Post</h6>
            </div>
            <div class="card-body">

<form action="newpost.php?page=add_post" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title">Post Title</label>
<input type="text" value="" class="form-control" name="post_title">
</div>
<div class="form-group">
<label for="title">Post Category Id</label><br>
        <select name="post_catagory_id" id="">
        <?php 
             $show_cat_details = "SELECT * FROM catagory";
             $show_cat_result = mysqli_query($con , $show_cat_details) or die($show_cat_details);
             while($row=mysqli_fetch_assoc($show_cat_result)){
                 $show_cat_name = $row['catagory_name'];
                 $show_cat_id = $row['catagory_id'];

                 echo "
                      <option value='{$show_cat_id}'>{$show_cat_name}</option>
                      ";
               } 
               ?>
        </select>
</div>
<div class="form-group">
<label for="title">Post Author</label>
<input type="text" value="" class="form-control" name="post_author">
</div>
<div class="form-group">
<label for="title">Post Status</label>
<input type="text" value="" class="form-control" name="post_status">
</div>
<div class="form-group">
<label for="post_image">Post Image</label><br>
<img width='200px' src="../img/posts/" alt="" srcset=""><br><br>
<input type="file" name="image">
</div>
<div class="form-group">
<label for="title">Post Tags</label>
<input type="text" value="" class="form-control" name="post_tags">
</div>
<div class="form-group">
<label for="post_content">Post Content</label>
<textarea class="form-control" value="" rows="10" cols="30" name="post_content"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Publish Post" class="btn btn-primary" name="add_post">
</div>
</form>

</div>
          </div>
        </div>

<?php 

                // $post_title = $_POST['post_title'];
                // $post_category_id = $_POST['post_category_id'];
                // $post_author =  $_POST['post_author'];
                // $post_status = $_POST['post_status'];

                // $post_image = $_FILES['image']['name'];
                // $post_image_temp = $_FILES['image']['tmp_name'];

                // $post_tags = $_POST['post_tags'];
                // $post_content = $_POST['post_content'];
                // $post_date = date('d-m-y');
                // $post_comment_count = 4; 

?>
