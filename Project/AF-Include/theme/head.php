<?php require_once __DIR__ . "/../config.php"; ?>
<?php require_once __DIR__ . "/../category_class.php"; ?>
<?php require_once __DIR__ . "/../product_class.php"; ?>
<?php require_once __DIR__ . "/../post_class.php"; ?>
<?php
$cn =new database;
$category =new category($cn);
$product =new product($cn);
$post=new post($cn);
?>
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="AF-Include/theme/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?php echo $cn->setting("site_title"); ?></title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="AF-Include/theme/css/linearicons.css">
	<link rel="stylesheet" href="AF-Include/theme/css/font-awesome.min.css">
	<link rel="stylesheet" href="AF-Include/theme/css/themify-icons.css">
	<link rel="stylesheet" href="AF-Include/theme/css/bootstrap.css">
	<link rel="stylesheet" href="AF-Include/theme/css/owl.carousel.css">
	<link rel="stylesheet" href="AF-Include/theme/css/nice-select.css">
	<link rel="stylesheet" href="AF-Include/theme/css/nouislider.min.css">
	<link rel="stylesheet" href="AF-Include/theme/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="AF-Include/theme/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="AF-Include/theme/css/magnific-popup.css">
	<link rel="stylesheet" href="AF-Include/theme/css/main.css">
</head>
