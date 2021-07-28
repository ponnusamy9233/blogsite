<?php
session_start();
include 'externals/db.php';

include 'externals/header.php';

?>

	<!-- Start main body Area -->
	<div class="main-body section-gap mt--30">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start Post Area -->
					<?php
                    $post_create = "SELECT * FROM posts WHERE post_status='published'";
					$post_result = mysqli_query($con , $post_create);
					
					while($row = mysqli_fetch_assoc($post_result)){
						$title = $row['post_title'];
						$author = $row['post_author'];
						$date = $row['post_date'];
						$content = $row['post_content'];
						$image = $row['post_image'];
						$tag = $row['post_tags'];
						$post_id = $row['post_id'];


					?>
					<section class="post-area">
						<div class="single-post-item">
							<figure>
								<img class="post-img img-fluid" src="img/posts/<?php echo $image; ?>" alt="">
							</figure>
							<h3>
								<a href="blog-details.html"><?php echo $title ?></a>
							</h3>
							<p><?php echo $content ?></p>
							<a href="blog-details.php?post=<?php echo $post_id; ?>" class="primary-btn text-uppercase mt-15">continue Reading</a>
							<div class="post-box">
								<div class="d-flex">
									<div>
										<a href="#">
											<img src="img/author/a1.png" alt="">
										</a>
									</div>
									<div class="post-meta">
										<div class="meta-head">
											<a href="#"><?php echo $tag ?></a>
										</div>
										<div class="meta-details">
											<ul>
												<li>
													<a href="#">
														<span class="lnr lnr-calendar-full"></span>
														<?php echo $date ?>
													</a>
												</li>
												<li>
													<a href="#">
											
													<?php echo $author ?>
													</a>
												</li>
											
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
             <!---pagination setup start--->
						<nav class="blog-pagination justify-content-center d-flex">
							<ul class="pagination">
								<li class="page-item">
									<a href="#" class="page-link" aria-label="Previous">
										<span aria-hidden="true">
											<span class="lnr lnr-arrow-left"></span>
										</span>
									</a>
								</li>

								<li class="page-item">
									<a href="#" class="page-link" aria-label="Next">
										<span aria-hidden="true">
											<span class="lnr lnr-arrow-right"></span>
										</span>
									</a>
								</li>
							</ul>
						</nav>
					</section>
					<!-- Start Post Area -->
				</div>

				
	<!-- Start main body Area -->
<?php
   include 'externals/sidebar.php';
   
  include 'externals/footer.php';

?>