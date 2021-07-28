<?php
ob_start();
include "externals/leftbar.php";
include "externals/header.php";



if(isset($_POST['create'])){

  $users = new User;
  //store variable in users values
  $users->username = $_POST['username'];
  $users->password = $_POST['password'];
  $users->firstname = $_POST['firstname'];
  $users->lastname = $_POST['lastname'];

  if($users->username =="" && $users->password =="" && $users->firstname=="" &&$users->password ==""){
    $table="";
  }
  else{
  //to send create method for Main Class
$table = 'users';
$fields = "username,password,firstname,lastname";
$values = "'$users->username','$users->password','$users->firstname' , '$users->lastname'";

  $users->create($table,$fields,$values);
  }
}


  ?>
  




                   <!-- Bar Chart -->
                
                   <div class="card shadow mb-4">
                <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
            </div>
            <div class="card-body">
            <?php
           
            ?>

<form action="add.php" method="post" >
<div class="form-group">
<label for="title">Username</label>
<input type="text" value="" class="form-control" name="username">
</div>
<div class="form-group">
<label for="title">Password</label>
<input type="password" value="" class="form-control" name="password">
</div>
<div class="form-group">
<label for="title">Firstname</label>
<input type="text" value="" class="form-control" name="firstname">
</div>

<div class="form-group">
<label for="title">Lastname</label>
<input type="text" value="" class="form-control" name="lastname">
</div>

<div class="form-group">
<input type="submit" value="Create User" class="btn btn-primary" name="create">
</div>
</form>

</div>
          </div>
        </div>
        <script src="script.js"></script>


