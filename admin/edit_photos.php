<?php
ob_start();
include "externals/leftbar.php";
include "externals/header.php";
include "externals/alert.php";


$id = $_GET['id'];
$photo = Photo::show_by_id('photo',$id);


//update function
if(isset($_POST['update'])){
    
    $photo->title = $_POST['title'];
    $photo->caption = $_POST['caption'];
    $photo->alternative_text = $_POST['alternative_text'];
    $photo->description = $_POST['description'];

    $table='photo';
    $fields = "title='$photo->title',caption='$photo->caption',alternative_text='$photo->alternative_text',description='$photo->description'";
    $photo->update($table,$fields);
    
}

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-8"  style="height: 200px;">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Photo</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                <img src="../img/blog/<?php echo $photo->filename;?>" style="width:200px;margin-left:200px;" alt="">
                <form action="edit_photos.php?page=update&id=<?php echo $photo->id; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="<?php echo $photo->title; ?>" class="form-control" name="title">
                </div>
                <div class="form-group">
                <label for="title">Caption</label>
                <input type="text" value="<?php echo $photo->caption; ?>" class="form-control" name="caption">
                </div>
                <div class="form-group">
                <label for="title">Alternative Text</label>
                <input type="text" value="<?php echo $photo->alternative_text; ?>" class="form-control" name="alternative_text">
                </div>
                
                <div class="form-group">
                <label for="post_content">Description</label>
                <textarea id="body" class="form-control" value="" rows="5" cols="30" name="description"><?php echo $photo->description; ?></textarea>
                </div>
                
                
                </div>
                
              </div>

            </div>

            <div class="col-xl-4 col-lg-4   ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Photo Details</h6>
                  <div class="dropdown no-arrow">
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <p><b>Uploaded On:</b> July 30 @ 5:55pm</p>
                   <p><b>Photo Id:</b> <?php echo $photo->id; ?></p>
                   <p><b>File Name:</b> <?php echo $photo->filename; ?></p>
                   <p><b>File Type:</b> <?php echo $photo->type; ?></p>
                   <p><b>File Size:</b> <?php echo $photo->size; ?></p>
                   <div style="margin-left: 160px" class="form-group">
                    <input type="submit" value="Update Photo" class="btn btn-primary" name="update">
                   </div>
                </div>
              </div>
              
            </div>
            </form>
            </div>
        </div>
    


      <!-- End of Main Content -->

