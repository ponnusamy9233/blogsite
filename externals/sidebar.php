          <?php
		  
		  include "externals/db.php";
		 $_SESSION['user_role'] = 'user';
		  
		  ?>
			 
			 <div class="col-lg-4 sidebar">
					<div class="single-widget search-widget">
						<form class="example" action="search.php" method="POST" style="margin:auto;max-width:300px">
							<input type="text" placeholder="Search Posts" name="search">
							<button type="submit" name="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

					

					<div class="single-widget popular-posts-widget">
						<h4 class="title">Popular Posts</h4>
						<div class="blog-list ">
						<?php
                          
						   $pop_post = "SELECT * FROM posts";
						   $pop_post_result = mysqli_query($con , $pop_post);

						   while($row = mysqli_fetch_assoc($pop_post_result)){
							$post_id=$row['post_id'];
							$title = $row['post_title'];
							$date = $row['post_date'];
							$image = $row['post_image'];

						   

                        ?>
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img class="img-fluid" width="100px" src="img/posts/<?php echo $image; ?>" alt="">
								</div>
								<div class="popular-details">
									<a href="blog-details.php?post=<?php echo $post_id;?>">
										<h4><?php echo $title; ?></h4>
									</a>
									<p class="text-uppercase"><?php echo $date; ?></p>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>

					<div class="single-widget category-widget">
						<h4 class="title">Post Categories</h4>
						<ul>
							<?php
								$all_catagory_lists = "SELECT * FROM catagory";
								$result = mysqli_query($con , $all_catagory_lists);
								while($row = mysqli_fetch_assoc($result)){
								$cat_list = $row['catagory_name'];
								$cat_id =$row['catagory_id'];

                               echo "
									<li><a href='catagory.php?id={$cat_id}' class='justify-content-between align-items-center d-flex myacss ' style='color: black;'>
									{$cat_list}
								    </a></li>";
							         

								}
							?>
							
							
						</ul>
					</div>

					

				</div>
			</div>
		</div>
	</div>