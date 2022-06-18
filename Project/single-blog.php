<!DOCTYPE html>
<html lang="zxx" class="no-js">

<?php include __DIR__ . "/AF-Include/theme/head.php"; ?>
<body>

    <!-- Start Header Area -->
	<?php include __DIR__ . "/AF-Include/theme/header.php"; ?>
	<?php 
		$id=$_GET["id"];
		$po = $post->post($id);
	?>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Blog Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Blog</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="AF-Include/theme/AF-Include/theme/img/blog/feature-img1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <ul class="blog_meta list">
                                    <li><a href="#"><?php echo $post->autor?><i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#"><?php echo $post->time?><i class="lnr lnr-calendar-full"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php echo $post->title?></h2>
                            <p class="excert"><?php echo $post->text?></p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="AF-Include/theme/AF-Include/theme/img/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="AF-Include/theme/AF-Include/theme/img/blog/post-img2.jpg" alt="">
                                </div>
                                <div class="col-lg-12 mt-25">
                                    <p align="center"><?php echo $post->mor_text?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
					<?php
						$query = "select * from comment where part = 2 and post_id='".$id."' and stat = 1";
						$query = $cn->pdo->prepare($query);
						$query->execute();
						$row = $query->rowCount();
					?>
                        <h4>0<?php echo $row; ?> Comments</h4>
						<?php
						while ($comment = $query->fetch(PDO::FETCH_ASSOC))
						{
						?>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="AF-Include/theme/img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#"><?php echo $comment["name"]; ?></a></h5>
                                        <p class="date"><?php echo $comment["time"]; ?></p>
                                        <p class="comment">
                                            <?php echo $comment["message"]; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
						<?php
									$query2 = "select * from comment where part = 2 and reply='".$comment["id"]."' and stat = 1";
									$query2 = $cn->pdo->prepare($query2);
									$query2->execute();
									$row2 = $query2->rowCount();
									if($row2 != 0)
									{
										$reply = $query2->fetch(PDO::FETCH_ASSOC);
									
						?>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="AF-Include/theme/img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#"><?php echo $reply["name"];?></a></h5>
                                        <p class="date"><?php echo $reply["time"];?> </p>
                                        <p class="comment">
                                           <?php echo $reply["message"];?>
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
						<?php 
								}
							}
						?>
                    </div>
                        <?php require_once __DIR__ . "/AF-Content/action/send_comment_post.php"; ?>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
						<?php
							$name = $post->autor;
							$query3 = "select * from user where name = '".$name."' or l_name='".$name."'";
							$query3 = $cn->pdo->prepare($query3);
							$query3->execute();
							$autor = $query3->fetch(PDO::FETCH_ASSOC);
						?>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="AF-Include/theme/img/blog/author.png" alt="">
                            <h4><?php echo $autor["name"]; ?>&nbsp<?php echo $autor["l_name"]; ?></h4>
                            <p>نویسنده</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p><?php echo $autor["about"]; ?></p>
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!-- start footer Area -->
   <?php include __DIR__ . "/AF-Include/theme/footer.php"; ?>
</body>

</html>