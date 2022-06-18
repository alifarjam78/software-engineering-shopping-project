	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6><?php echo $cn->setting("footer_about_title"); ?></h6>
						<p>
							<?php echo $cn->setting("footer_about_text"); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6><?php echo $cn->setting("footer_news"); ?></h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20"><?php echo $cn->setting("footer_instragram"); ?></h6>
						<ul class="instafeed d-flex flex-wrap">
						<?php
							$img=$cn->setting("footer_img");
							$img=unserialize($img);
							$i=0;
							while($i <= 6)
							{
								$i++;
						?>
							<li><img src="<?php echo $img["img".$i.""]; ?>" alt=""></li>
						<?php
							}
						?>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6><?php echo $cn->setting("footer_contact_title"); ?></h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
						<?php
							$contact=$cn->setting("footer_contact");
							$contact=unserialize($contact);
						?>
							<a href="<?php echo $contact["facebook"]; ?>"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo $contact["twitter"]; ?>"><i class="fa fa-twitter"></i></a>
							<a href="<?php echo $contact["google"]; ?>"><i class="fa fa-dribbble"></i></a>
							<a href="<?php echo $contact["telegram"]; ?>"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	
		<script src="AF-Include/theme/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="AF-Include/theme/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="AF-Include/theme/js/vendor/bootstrap.min.js"></script>
	<script src="AF-Include/theme/js/jquery.ajaxchimp.min.js"></script>
	<script src="AF-Include/theme/js/jquery.nice-select.min.js"></script>
	<script src="AF-Include/theme/js/jquery.sticky.js"></script>
	<script src="AF-Include/theme/js/nouislider.min.js"></script>
	<script src="AF-Include/theme/js/countdown.js"></script>
	<script src="AF-Include/theme/js/jquery.magnific-popup.min.js"></script>
	<script src="AF-Include/theme/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="AF-Include/theme/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="AF-Include/theme/js/gmaps.min.js"></script>
	<script src="AF-Include/theme/js/main.js"></script>