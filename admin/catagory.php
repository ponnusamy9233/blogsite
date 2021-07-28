<?php

ob_start();
$show_cat_name='';
$sign = false;
$post = false;
include "externals/leftbar.php";
include "externals/header.php";
include "../externals/db.php";

$error_msg =false;
if(isset($_POST['submit'])){
 
    $cat_name = $_POST['cat_name'];
    if($cat_name === ""){
        $insert_cat =false;
        $error_msg = "*This field in cannot be empty!";
        
    }
    else{
    $insert_cat = "INSERT INTO catagory ( catagory_name) VALUES ('$cat_name')";

    $insert_result = mysqli_query($con , $insert_cat) or die(mysqli_error($insert_cat));
    }
}
//Delete catagory

if(isset($_GET['delete'])){
  $post=true;
    $del_cat_id = $_GET['delete'];
    $cat_del_query = "DELETE FROM catagory WHERE catagory_id = $del_cat_id";
    $cat_del_result = mysqli_query($con , $cat_del_query) or die(mysqli_error($cat_del_result));
    header('Location:catagory.php');
}

// Read catagory

if(isset($_GET['edit'])){
  $post=true;
  $read_cat_id = $_GET['edit'];

  $read_cat_query = "SELECT * FROM catagory WHERE catagory_id = $read_cat_id";
  $read_cat_result = mysqli_query($con , $read_cat_query) or die(mysqli_error($read_cat_result));
  
  while($row=mysqli_fetch_assoc($read_cat_result)){
    $show_cat_name = $row['catagory_name'];
    $cat_id = $row['catagory_id'];
    $sign=true;
    

  }
}
// Update catagory



if(isset($_POST['Update']))
{
  
    $update_cat_id=$_GET['id'];
    $update_cat_name = $_POST['cat_name'];
    $update_cat_query = "UPDATE catagory SET catagory_name='$update_cat_name' WHERE catagory_id='$update_cat_id'";
    $update_cat_result = mysqli_query($con , $update_cat_query)or die(mysqli_error(($update_cat_result)));
    
    


}



?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Content Row -->

<div class="row">

  <!-- Area Chart -->
  <div class="col-xl-6 col-lg-6"  style="height: 200px;">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Add Categories</h6>

      </div>
      <!-- Card Body -->
      <div class="card-body">
      <?php
          if($post==true):
          ?>
          <form action="catagory.php?id=<?php echo $cat_id ?>" method="post">
          <?php else: ?>
            <form action="catagory.php" method="post">         
               <?php endif ?>
      <!-- <label for="cat-title">Add Categories:  </label> -->
      <i style="color: red;font-size: 13px;"><?php echo $error_msg  ?></i>
          <input type="text" class="form-control" name="cat_name" value="<?php echo $show_cat_name; ?>"><br>
          <?php
          if($sign==true):
          ?>
          <input type="submit" class="btn btn-primary" value="Update" name="Update">
          <?php else: ?>
          <input type="submit" class="btn btn-primary" value="submit" name="submit">
          <?php endif ?>
          
      </form>
      </div>
      
    </div>

  </div>

  
  <div class="col-xl-6 col-lg-6   ">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
        <div class="dropdown no-arrow">
        </div>
      </div>
      <!-- Card Body -->
      <div class="card-body">
          <table class="table table-bordered table-hover">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Categories</th>
                      <th>Edit</th>
                      <th>Remove</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $show_cat = "SELECT * FROM catagory";
                  $show_cat_result = mysqli_query($con,$show_cat);

                  while($row = mysqli_fetch_assoc($show_cat_result)){
                   
                      $cat_id = $row['catagory_id'];
                      $cat_name = $row['catagory_name'];
                 ?>
                  <tr>
                  <td><?php echo   $cat_id ; ?></td>
                  <td><?php echo   $cat_name; ?></td>
                  <td><a href="catagory.php?edit=<?php echo $cat_id; ?>" type='button' class='btn btn-primary'>Edit</a></td>
                  <td><a href="catagory.php?delete=<?php echo $cat_id; ?>" type='button' class='btn btn-danger' >Delete</a></td>
                 <?php  }      ?>
                 
              </tbody>
          </table>
      </div>
    </div>
    
  </div>

  </div>
</div>
