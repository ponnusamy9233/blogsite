<?php
session_start();
ob_start();
include "externals/leftbar.php";
include "externals/header.php";
include "../externals/db.php";
include "externals/alert.php";


?>

<!--delete comments -->


 
          <!-- Begin Page Content -->
            <div class="container-fluid">

         <!-- Bar Chart -->
         <div class="card shadow mb-2">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">View All Comments</h6>
                </div>
                <div class="card-body">
                
                <table class="table table-bordered table-hover">
                      <thead >
                          <tr>
                              <th>Id</th>
                              <th>Author</th>
                              <th>Email</th>
                              <th>Comments</th>
                              <th>Post</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>Approve</th>
                              <th>UnApprove</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                      $show_comments_query = "SELECT * FROM comments";
                      $show_comments_result = mysqli_query($con , $show_comments_query) or die(mysqli_error($show_comments_query));
                         
                      while($row = mysqli_fetch_assoc($show_comments_result)){
                         $show_comment_id = $row['cmt_id'];
                         $show_comment_author = $row['cmt_author'];
                         $show_comment_content = $row['cmt_content'];
                         $show_comment_email = $row['cmt_email'];
                         $show_comment_post_id = $row['cmt_post_id'];
                         $show_comment_status = $row['cmt_status'];
                         
                         $show_comment_date = $row['cmt_date'];
                                           
                         ?>
                         <tr>
                           <td><?php echo $show_comment_id; ?></td>
                           <td><?php echo $show_comment_author; ?></td>
                           <td><?php echo $show_comment_email; ?></td>
                           <td><?php echo $show_comment_content; ?></td>
                           <?php
                            $select_query= "SELECT * FROM posts WHERE post_id = $show_comment_post_id";
                            $select_post_result = mysqli_query($con,$select_query);
                            while($row = mysqli_fetch_assoc($select_post_result)){
                              $show_post_title =$row['post_title'];
                              $show_post_id =$row['post_id'];
                           ?>
                           <td><a href="../blog-details.php?post=<?php echo $show_post_id;?>"><?php echo $show_post_title; ?></a></td>
                           <?php } ?>
                           <td><?php echo $show_comment_status;?></td>
                           <td><?php echo $show_comment_date;?></td>
                           <td><a href="comments.php?approve=<?php echo $show_comment_id;?>">Approve</a></td>
                           <td><a href="comments.php?unapprove=<?php echo $show_comment_id;?>">UnApprove</a></td>
                           <td><a href="comments.php?delete=<?php echo $show_comment_id;?>">Delete</a></td>
                         </tr>
                       
                         <?php } ?>
                        
                        
<?php
//delete panel
if(isset($_GET['delete'])){
  $cmt_del_id=$_GET['delete'];
  $cmt_del_query="DELETE FROM comments WHERE cmt_id=$cmt_del_id";
  $cmt_del_result=mysqli_query($con,$cmt_del_query) or die(mysqli_error($cmt_del_query));
  header('Location:comments.php');
}

//approve panel
if(isset($_GET['approve'])){
  $cmt_approve_id=$_GET['approve'];
  $cmt_approve_query="UPDATE comments SET cmt_status='approved' WHERE cmt_id=$cmt_approve_id";
  $cmt_approve_result=mysqli_query($con,$cmt_approve_query) or die(mysqli_error($cmt_approve_query));
  header('Location:comments.php');
}

//unapprovel panel
if(isset($_GET['unapprove'])){
  $cmt_unapprove_id=$_GET['unapprove'];
  $cmt_unapprove_query="UPDATE comments SET cmt_status='unapproved' WHERE cmt_id=$cmt_unapprove_id";
  $cmt_unapprove_result=mysqli_query($con,$cmt_unapprove_query) or die(mysqli_error($cmt_unapprove_query));
  header('Location:comments.php');
}





