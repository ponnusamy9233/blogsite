<?php
  session_start();
  ob_start();
  include 'externals/header.php';  
  include 'externals/db.php';
  include '../cms/admin/externals/alert.php';








?>
    <!-- Blog Area -->
    <section class="blog_area section-gap single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <?php

                if(isset($_GET['post'])){
                    $post_id = $_GET['post'];
                
                    $post_create = "SELECT * FROM posts WHERE post_id=$post_id";
					$post_result = mysqli_query($con , $post_create) or die(mysqli_error($post_create));
					
					while($row = mysqli_fetch_assoc($post_result)){

						$title = $row['post_title'];
						$author = $row['post_author'];
						$date = $row['post_date'];
						$content = $row['post_content'];
						$image = $row['post_image'];
						$tag = $row['post_tags'];
                    
                
            }}
					?>
               
                
                    <div class="main_blog_details">
                        <img class="img-fluid" src="img/posts/<?php echo $image; ?>" alt="">
                        <h4><?php echo $title ?></h4>
                        <div class="user_details">
                          
                            <div class="float-right">
                                <div class="media">
                                    <div class="media-body">
                                        <h5><?php echo $author; ?></h5>
                                        <p><?php echo $date ;?></p>
                                    </div>
                                    <div class="d-flex">
                                        <img src="img/blog/user-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo $content; ?>
                    </div>
                       
                    

    
                   
                    <div class="comments-area">
                        <!-- <h4>05 Comments</h4> -->
                        <?php 
                                     $show_cmt_query="SELECT * FROM comments WHERE cmt_post_id=$post_id AND cmt_status='approved'";
                                     $show_cmt_result=mysqli_query($con,$show_cmt_query)or die(mysqli_error($show_cmt_query));

                                     while($row = mysqli_fetch_assoc($show_cmt_result)){

                                           $show_author_name=$row['cmt_author'];
                                           $show_date=$row['cmt_date'];
                                           $show_author_cmt=$row['cmt_content'];
                                    ?>
                                       
                                      
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                    <h5><a href="#"><?php echo $show_author_name; ?></a></h5>
                                    <p class="date"><?php echo $show_date; ?></p>
                                    <p class="comment">
                                        <?php echo $show_author_cmt; ?>
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div> -->
                            </div>
                        </div>
                        <?php } ?>
                    <div class="comment-form">
                        <h4>Leave a Comment</h4>
                        <form action="blog-details.php?post=<?php echo $post_id;?>" method="POST">
                            <div class="form-group form-inline">
                            </div>
                            <div class="form-group">
                                <input type="text" name="user_name" placeholder="NAME" class="form-control mb-10">
                                <input type="email" name="user_email" placeholder="EMAIL" class="form-control mb-10">
                                <textarea name="user_message" id="" cols="30" rows="5" class="form-control mb-10"
                                onfocus="this.placeholder = ''" onblur="this.placeholder"
                                ></textarea>
                            </div>
                                <input type="submit" value="Send message" class="primary-btn submit_btn text" name="send_msg">
                        </form>
                    </div>
                                
                            </div>
            </div>
        


                            <?php include "externals/sidebar.php"; ?>
                            <?php include "externals/footer.php"; ?>
<?php
   if(isset($_POST['send_msg'])){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $comment_cont = $_POST['user_message'];
 
        
   
    $cmt_query = "INSERT INTO comments(cmt_author,cmt_email,cmt_content,cmt_post_id,cmt_status,cmt_date) VALUES('$user_name','$user_email','$comment_cont','$post_id','unapproved',now())";
    $cmt_result = mysqli_query($con , $cmt_query)or die(mysqli_error($cmt_query));
    
    $_SESSION['message'] = "Your message sent successfully!";
    $_SESSION['msg_type'] = "success";
}
?>