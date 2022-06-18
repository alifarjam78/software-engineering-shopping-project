<!DOCTYPE html>
<html lang="zxx" class="no-js">

<?php include __DIR__ . "/AF-Include/theme/head.php"; ?>

<body>

    <!-- Start Header Area -->
	<?php include __DIR__ . "/AF-Include/theme/header.php"; ?>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Blog Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.php">Blog</a>
                    </nav>
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- End Banner Area -->

    <!--================Blog Categorie Area =================-->

    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
					<?php
						$p=$post->view_post();
						while($post = $p->fetch(PDO::FETCH_ASSOC))
						{
					?>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <ul class="blog_meta list">
                                        <li><a href="#"><?php echo $post["autor"];?><i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#"><?php echo $post["time"];?><i class="lnr lnr-calendar-full"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="<?php echo $post["img"];?>" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.php">
                                            <h2><?php echo $post["title"];?></h2>
                                        </a>
                                        <p><?php echo $post["text"];?></p>
                                        <a href="single-blog.php?id=<?php echo $post["id"]; ?>" class="white_bg_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
						<?php 
						}
						?>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
				<?php 
					$cn->set_table("user");
					$u=$cn->select("id = :id",array(":id" => 1));
					$admin=$u->fetch(PDO::FETCH_ASSOC);
				?>
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
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="AF-Include/theme/img/blog/author.png" alt="">
                            <h4><?php echo $admin["name"]?>&nbsp<?php echo $admin["l_name"]?></h4>
                            <p>نویسنده وبلاگ</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p><?php echo $admin["about"]?></p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="AF-Include/theme/img/blog/add.jpg" alt=""></a>
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