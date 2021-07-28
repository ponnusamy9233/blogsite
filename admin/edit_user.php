<?php
ob_start();
include "externals/leftbar.php";
include "externals/header.php";
?>
<?php
//show particular id details for edit request
$id = $_GET['id'];
$users = User::show_by_id('users',$id);

if(isset($_POST['update'])){
  $users->username = $_POST['username'];
  $users->password = $_POST['password'];
  $users->firstname = $_POST['firstname'];
  $users->lastname = $_POST['lastname'];

  $table = 'users';
  $fields = "username='$users->username',password='$users->password',firstname='$users->firstname',lastname='$users->lastname'";

  $users->update($table,$fields);
  $users->username ="";$users->password="";$users->firstname="";$users->lastname="";
}

?>



                   <!-- Bar Chart -->
                
                   <div class="card shadow mb-4">
                <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Update User</h6>
            </div>
            <div class="card-body">
            <?php
           
            ?>

<form action="edit_user.php?id=<?php echo $users->id;?>" method="post" >

<div class="form-group">
<label for="title">Username</label>
<input type="text" value="<?php echo $users->username;?>" class="form-control" name="username">
</div>
<div class="form-group">
<label for="title">Password</label>
<input type="password" value="<?php echo $users->password;?>" class="form-control" name="password">
</div>
<div class="form-group">
<label for="title">Firstname</label>
<input type="text" value="<?php echo $users->firstname;?>" class="form-control" name="firstname">
</div>

<div class="form-group">
<label for="title">Lastname</label>
<input type="text" value="<?php echo $users->lastname;?>" class="form-control" name="lastname">
</div>

<div class="form-group">
<input type="submit" value="Update User" class="btn btn-primary" name="update">
</div>
</form>

</div>
          </div>
        </div>
        <script src="script.js"></script>


