<!DOCTYPE html>
<html lang="zxx" class="no-js">

<?php include __DIR__ . "/AF-Include/theme/head.php"; ?>

<body>

	<!-- Start Header Area -->
	
<?php include __DIR__ . "/AF-Include/theme/header.php"; ?>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1><?php echo $cn->setting("site_banner"); ?> <br><?php echo $cn->setting("site_banner_2"); ?></h1>
									<p><?php echo $cn->setting("site_banner_about"); ?></p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="AF-Include/theme/img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1><?php echo $cn->setting("site_banner"); ?> <br><?php echo $cn->setting("site_banner_2"); ?></h1>
									<p><?php echo $cn->setting("site_banner_about"); ?></p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="AF-Include/theme/img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="AF-Include/theme/img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="AF-Include/theme/img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="AF-Include/theme/img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="AF-Include/theme/img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
					<?php
						$class="";
						$cate = $category->view_category();
						while($cat = $cate->fetch(PDO::FETCH_ASSOC))
						{
							if($cat["id"] == 1 or $cat["id"] == 3)
							{
								$class="col-lg-8 col-md-8";
							}
							if($cat["id"] == 2 or $cat["id"] == 4)
							{
								$class="col-lg-4 col-md-4";
							}
					?>
						<div class="<?php echo $class;?>">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo $cat["img"];?>" alt="">
								<a href="AF-Include/theme/img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title"><?php echo $cat["name"];?></h6>
									</div>
								</a>
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="AF-Include/theme/img/category/c5.jpg" alt="">
						<a href="AF-Include/theme/img/category/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Sneaker for Sports</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php
						$proe = $product->view_product();
						while($pro = $proe->fetch(PDO::FETCH_ASSOC))
						{
							if($pro["amount"] != 0)
							{
					?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo $pro["img"];?>" alt="">
							<div class="product-details">
								<h6><?php echo $pro["name"];?></h6>
								<div class="price">
									<h6>$<?php echo $pro["price"];?></h6>
									<h6 class="l-through">$<?php echo $pro["discount"];?></h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="single-product.php?id=<?php echo $pro["id"]; ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php
							}
						}
					?>
					<!-- single product -->
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Coming Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php
						$proe = $product->view_comming();
						while($pro = $proe->fetch(PDO::FETCH_ASSOC))
						{
					?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo $pro["img"];?>" alt="">
							<div class="product-details">
								<h6><?php echo $pro["name"];?></h6>
								<div class="price">
									<h6><?php echo $pro["time"];?></h6>
									<h6 class="l-through"><?php echo $pro["discount"];?></h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					?>
					<!-- single product -->
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
		<h1 align="center">تخفیف ها</h1><br><br>
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<?php
							$proe = $product->view_product();
							while($pro = $proe->fetch(PDO::FETCH_ASSOC))
							{
								if($pro["discount"] != 0 and $pro["amount"] != 0)
								{
						?>
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="<?php echo $pro["img"];?>" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$<?php echo $pro["price"];?></h6>
									<h6 class="l-through">$<?php echo $pro["discount"];?></h6>
								</div>
								<h4><?php echo $pro["name"];?></h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<?php
								}
							}
						?>
						<!-- single exclusive carousel -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="AF-Include/theme/img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="AF-Include/theme/img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="AF-Include/theme/img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="AF-Include/theme/img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="AF-Include/theme/img/brand/5.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

	<!-- Start related-product Area -->
	
	<!-- End related-product Area -->

	<!-- start footer Area -->
<?php include __DIR__ . "/AF-Include/theme/footer.php"; ?>
	<!-- End footer Area -->
</body>

</html>