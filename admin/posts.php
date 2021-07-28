

<?php

ob_start();
include "externals/leftbar.php";
include "externals/header.php";
include "../externals/db.php";
include "externals/alert.php";


if(isset($_POST['select']))
{
 foreach($_POST['select'] as $post_id_value){
   $get_select_options = $_POST['bulkBoxes'];

   switch($get_select_options){
      case 'published';
      $published_query = "UPDATE posts SET post_status='$get_select_options' WHERE post_id='$post_id_value'";
      $published_result = mysqli_query($con,$published_query);
      break;

      case 'unpublished';
      $unpublished_query = "UPDATE posts SET post_status='$get_select_options' WHERE post_id='$post_id_value'";
      $unpublished_result = mysqli_query($con,$unpublished_query);
      break;
      case 'delete';
      $delete_query="DELETE FROM posts WHERE post_id='$post_id_value'";
      $delete_result = mysqli_query($con,$delete_query);
      break;
   }
 }
}

?>


          <!-- Begin Page Content -->
            <div class="container-fluid">

         <!-- Bar Chart -->
         <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">View All Posts</h6>
                </div>
            
                
                <div class="card-body">
                <form action="posts.php" method="post">
              <div class="row">
              <div class="col-sm-4" id="bulkBoxes">
              <select name="bulkBoxes"  class="form-control">
                  <option value="published">published</option>
                  <option value="unpublished">unpublished</option>
                  <option value="delete">delete</option>
                </select>
              </div>
              <br>
              <div class="col-sm-2">
              <input type="submit" value="Apply" name="apply" class="btn btn-sm btn-primary shadom-sm">
              </div>
              </div>
              <br>
                <table class="table table-bordered table-hover">
                      <thead >
                          <tr>
                             <th><input type="checkbox"  id="selectBoxes" ></th>
                              <th>Id</th>
                              <th>Author</th>
                              <th>Title</th>
                              <th>Category</th>
                              <th>Status</th>
                              <th>Image</th>
                              <th>Tags</th>
                              <th>Comments</th>
                              <th>Date</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                      $show_posts_query = "SELECT * FROM posts";
                      $show_posts_result = mysqli_query($con , $show_posts_query) or die(mysqli_error($show_posts_query));

                      while($row = mysqli_fetch_assoc($show_posts_result)){
                         $show_post_id = $row['post_id'];
                         $show_post_author = $row['post_author'];
                         $show_post_title = $row['post_title'];
                         $show_post_catagory = $row['post_catagory_id'];
                         $show_post_status = $row['post_status'];
                         $show_post_image = $row['post_image'];
                         $show_post_tag = $row['post_tags'];
                         $show_post_comment = $row['post_comment_count'];
                         $show_post_date = $row['post_date'];
                         
                      
                

                      ?>
                      <tr>
                         <td><input type="checkbox" class="checkbox"  name="select[]" value="<?php echo $show_post_id; ?>" id="selected"></td>
                         <td><?php echo $show_post_id;?></td>
                         <td><?php echo $show_post_author;?></td>
                         <td><?php echo $show_post_title;?></td>
                         <?php
                         $show_cat_details = "SELECT * FROM catagory WHERE catagory_id = $show_post_catagory";
                          $show_cat_result = mysqli_query($con , $show_cat_details) or die($show_cat_details);
                          while($row=mysqli_fetch_assoc($show_cat_result)){
                              $show_cat_name = $row['catagory_name'];
                              $show_cat_id = $row['catagory_id'];
 
                        ?> 
                        <td><?php echo $show_cat_name;?></td>
                        <?php } ?>
                         <td><?php echo $show_post_status;?></td>
                         <td><img class="post-img img-fluid" src="../img/posts/<?php echo $show_post_image; ?>" width="100px" alt=""></td>
                         <td><?php echo $show_post_tag;?></td>
                         <?php 
                           $show_cmt_count_query="SELECT * FROM comments WHERE cmt_post_id=$show_post_id AND cmt_status='approved'";
                           $show_cmt_result=mysqli_query($con , $show_cmt_count_query) or die(mysqli_error($show_cmt_count_query));
                           $count_result = mysqli_num_rows($show_cmt_result);
                         ?>
                         <td><?php echo $count_result;?></td>
                         <td><?php echo $show_post_date;?></td>
                         <td><a href="edit.php?edit=post_edit&edit=<?php echo $show_post_id;?>" type='button' class='btn btn-primary' name="edit">Edit</a></td>
                         <td><a href="posts.php?delete=post_delete&delete=<?php echo $show_post_id;?>" type='button' class='btn btn-danger' >Delete</a></td>

                      
                       </tr>
                       <?php } ?>
                      </tbody>
                  </table>
                  </form>
                  </div>
              </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script>
              $('#selectBoxes').click(function(){
                if(this.checked){
                  $('.checkbox').each(function(){
                    this.checked=true;
                  })
                }
                else{
                  $('.checkbox').each(function(){
                    this.checked=false;
                  })
                }
              });
            </script>
<?php    


  
if(isset($_GET['delete'])){
  $del_post_id = $_GET['delete'];

  $del_post_query="DELETE FROM posts WHERE post_id=$del_post_id";
  $del_post_result = mysqli_query($con,$del_post_query ) or die($del_post_query);

 
  $_SESSION['message'] = "Your record has been deleted!";
  $_SESSION['msg_type']="warning";
  

}

      ?>