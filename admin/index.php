 <?php 
 include "externals/leftbar.php";
  include "externals/header.php";
  
 

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
   
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Posts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                     //normal connection method
                   
                    //  $users_query = "SELECT * FROM users";
                    //  $users_result = mysqli_query($database->conn,$users_query);
                    //  $users_count = mysqli_num_rows($users_result);
                    //  echo $users_count;

                     //this is for a query compression method

                    //  $sql = "SELECT * FROM users";
                    //  $users_result = $database->query($sql);
                    //  $users_count = mysqli_num_rows($users_result);
                    //  echo $users_count;


                    // this is for show all user function in user.php
                    
                    //to use show all user details
                  
                  //   $users_func = User::show_all();
                   
                  //  foreach($users_func as $user){
                  //     echo $user->username;
                  //    }
                   
                      //this is for static function method
 
                      //to use single user deteails
                      //  $show_by_id = User::show_by_id(1);

                      //  print_r($show_by_id->username);
                      // $row = mysqli_fetch_assoc($show_by_id);

                      //this method can be echo array values so we can change
                      // echo $row['username'];
                      //changing echo array values echo
                      // $user = User::auto_loop($row);
                      // //we can change $row in user function;
                      
                      // echo $user->username;

                      //start *create method for users in dynamic*
                      //and this is universal create method
                        //  $user1 = new User();
                        //  $user1->username = "guru";
                        //  $user1->password = "guru";
                        //  $user1->firstname = "guru";
                        //  $user1->lastname = "guru";
                         
                        //  $user1->create('users','username , password , firstname ,lastname',"'$user1->username','$user1->password','$user1->firstname','$user1->lastname'");

                         // * start users update
                        // $users = User::show_by_id(12);//this is for staic method class called
                         // this method can be used for update users values & update universal method
                        //  $users->username = "ragu";
                      //  $users->update('users',"username='$users->username'");
                        //this method used to update users & delete universal method
                      //  $users->delete('users');

                      // to check main class creation concept
                      // $users = User::show_all('users');

                      // foreach($users as $user){
                      //   echo $user->username;
                      // }

                      // $user = new Photo();
                      // $user->title = "first";
                      // $user->description = "second wave";
                      // $user->create('photo','title,description',"'$user->title','$user->description'");

                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Catagories</div>
                      <!-- <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                      $cat_query = "SELECT * FROM catagory";
                      $cat_result = mysqli_query($con,$cat_query);
                      $cat_count = mysqli_num_rows($cat_result);
                      echo $cat_count;
                      
                      ?></div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                          <!-- <?php
                      $users_query = "SELECT * FROM users";
                      $users_result = mysqli_query($con,$users_query);
                      $users_count = mysqli_num_rows($users_result);
                      echo $users_count;
                      
                      ?> --></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Comments</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <!-- <?php
                      $comments_query = "SELECT * FROM comments";
                      $comments_result = mysqli_query($con,$comments_query);
                      $comments_count = mysqli_num_rows($comments_result);
                      echo $comments_count;
                      
                      ?> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

        
          <div class="row">

<!-- Area Chart -->
<div class="col-xl-12">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
    </div>
    <!-- Card Body -->
    
    <div class="card-body">
    <?php
     $posts_query = "SELECT * FROM posts WHERE post_status='unpublished'";
     $posts_result = mysqli_query($con,$posts_query);
     $post_un_count = mysqli_num_rows($posts_result);

     $comment_query = "SELECT * FROM comments WHERE cmt_status='unapproved'";
     $comment_result = mysqli_query($con,$comment_query);
     $comments_un_count = mysqli_num_rows($comment_result);
     
     ?>
<script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
['Data', 'Count','Unpublished'],
<?php

echo "['posts', $post_count,$post_un_count],";
echo "['catagory', $cat_count,0],";
echo "['users', $users_count,0],";
echo "['comments', $comments_count,$comments_un_count]";


?>
]);

var options = {
chart: {
title: 'Company Performance',
subtitle: 'Sales, Expenses, and Profit: 2014-2017',
}
};

var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>
<div id="columnchart_material" style="width: auto; height: 500px;"></div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</br>

</div>
<!-- /.container-fluid -->

      <!-- End of Main Content -->
      <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  
   

    
  </body>
</html>

  