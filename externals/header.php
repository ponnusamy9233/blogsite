<?php

include "db.php";

$_SESSION['user_role']='user';
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Blog Template</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> <style>
	 body{
		font-family: 'Quicksand', sans-serif;
	 }
 </style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	
		<a class="navbar-brand" href="#">Grumpy</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav">
			<li class="nav-item active">
			  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>

			<?php
             $all_catagory_lists = "SELECT * FROM catagory LIMIT 3" ;
			 $cat_result = mysqli_query($con , $all_catagory_lists);
			 while($row = mysqli_fetch_assoc($cat_result)){
                $cat_list = $row['catagory_name'];
				echo "
						<li class='nav-item'>
					<a class='nav-link' href='#'>{$cat_list}</a>
					</li>";
				
				   
			 }
			
				
			?>
			 <li class='nav-item'>
					<a class='nav-link' href='admin/'>Admin</a>
					</li>
			 <li class="nav-item">
					<a class='nav-link' href='admin/login.php'>login</a>
					</li>

					<?php

                   if(isset($_SESSION['user_role'])){
					   if(isset($_GET['post'])){
						   $get_post_page = $_GET['post'];
                           echo "<li class='nav-item'>
								<a class='nav-link' href='admin/edit.php?edit=post_edit&edit= $get_post_page'>Edit</a>
								</li>";
					   }
				   }

                   ?>
			
			
		  </ul>
		</div>
	  </nav>
	</div>
