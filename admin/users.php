<?php
ob_start();
include "externals/leftbar.php";
include "externals/header.php";
include "externals/alert.php";

$users = User::show_all('users');



?>

<!--delete comments -->


 
          <!-- Begin Page Content -->
            <div class="container-fluid">

         <!-- Bar Chart -->
         <div class="card shadow mb-2">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">View All users</h6>
                </div>
                <div class="card-body">
                
                <table class="table table-bordered table-hover">
                      <thead >
                          <tr>
                              <th>Id</th>
                              <th>Username</th>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Edit</th>
                              <th>Delete</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                         <?php foreach($users as $user): ?>
                          
                            <tr>
                                <td><?php echo $user->id;?></td>
                                <td><?php echo $user->username;?></td>
                                <td><?php echo $user->firstname;?></td>
                                <td><?php echo $user->lastname;?></td>
                                <td><a href="edit_user.php?id=<?php echo $user->id;?>">Edit</a></td>
                                <td><a href="delete_user.php?id=<?php echo $user->id;?>">Delete</a></td>
                               
                                
                            </tr>



                        <?php  endforeach; ?>
                      </tbody>
                  </table>
              </div>
         </div>
   </div>
            
                     

                   
                     
                     
                        
                        
<?php
//delete panel
// if(isset($_GET['delete'])){
//   $cmt_del_id=$_GET['delete'];
//   $cmt_del_query="DELETE FROM comments WHERE cmt_id=$cmt_del_id";
//   $cmt_del_result=mysqli_query($con,$cmt_del_query) or die(mysqli_error($cmt_del_query));
//   header('Location:comments.php');
// }

// //approve panel
// if(isset($_GET['approve'])){
//   $cmt_approve_id=$_GET['approve'];
//   $cmt_approve_query="UPDATE comments SET cmt_status='approved' WHERE cmt_id=$cmt_approve_id";
//   $cmt_approve_result=mysqli_query($con,$cmt_approve_query) or die(mysqli_error($cmt_approve_query));
//   header('Location:comments.php');
// }

// //unapprovel panel
// if(isset($_GET['unapprove'])){
//   $cmt_unapprove_id=$_GET['unapprove'];
//   $cmt_unapprove_query="UPDATE comments SET cmt_status='unapproved' WHERE cmt_id=$cmt_unapprove_id";
//   $cmt_unapprove_result=mysqli_query($con,$cmt_unapprove_query) or die(mysqli_error($cmt_unapprove_query));
//   header('Location:comments.php');
// }
?>




