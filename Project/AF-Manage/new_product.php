<!DOCTYPE html>
<html lang="fa">

<head>        
    <?php include __DIR__ . "/content/head.php" ; ?>
</head>
<body>    
    <div id="loader"><img src="img/loader.gif"/></div>
    <div class="wrapper">
        
        <div class="sidebar">
            
		<?php include __DIR__ . "/content/menu.php" ; ?>
            
        </div>
        
        <div class="body">
            
            <ul class="navigation">
               <?php include __DIR__ . "/content/menu_top.php" ; ?>
            </ul>
            
            
            <div class="content">
                
                <div class="page-header">
					<div class="wrap-title">
						<div class="icon">
							<span class="ico-arrow-right"></span>
						</div>
						<h1>افزودن محصول <small>محصولات</small></h1>
					</div>
					<ul class="breadcrumb">
						<li class="active">افزودن</li>
					</ul>
					<div class="clear"></div>
                </div>  
            </div>
			<form onSubmit="" action="action/add_product.php" method="post" enctype="multipart/form-data">
				<?php 
					if(isset($_SESSION["error"]))
					{
						
						if($_SESSION["error"] == "success")
						{
							$msg = "<strong>تبریک ! </strong>محصول با موفقیت اضافه شد";
							$class = "success";
						}
						else
						{
							$msg = "<strong>خطا ! </strong>".$_SESSION["error"];
							$class = "error";
						}
				?>

				<div class="row-fluid">
					<div class="alert alert-<?php echo $class; ?>">                
					<?php echo $msg; ?>
					</div>
				</div>
				<?php
						unset($_SESSION["error"]);
					}	
				?>
		<div class="row-fluid">
				
				<div class="span3">
				<div class="block" id="sWidget_2">
					<div class="head dblue">                                
						<h2>اطلاعات و ارسال</h2>                                
					</div>
				<div class="data dark">
					<div class="row-form">
						<div class="span3 pull-right">تصویر * :</div>
						<div class="span9">
							<input type="file" name="img">
						</div>
					</div>
					<div class="row-form">
						<div class="span3 pull-right">دسته :</div>
						<div class="span9">
							<select name="category">
								<option value="0">بدون دسته بندی</option>
								<?php
									$q = $cn->pdo->query("select * from category where part = 1");
									$q->execute();
									while($r = $q->fetch(PDO::FETCH_ASSOC))
									{
										echo '<option value="'.$r['id'].'">'.$r["name"].'</option>';
									}
								?>
							</select>
						</div>
					</div>
					<div class="row-form">
						<div class="span7">
							<button class="btn btn-danger" type="reset"><span class="icon-remove icon-white"></span> مجدد</button>
							<button class="btn" type="submit" name="sb"><span class="icon-ok icon-white"></span> ارسال</button>
						</div>
					</div>
				</div>
			</div>
		</div>
					
				<div class="span9">
					<div class="block">
					<div class="data-fluid tabbable tabs-right">                    
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">FA</a></li>
							<li><a href="#tab2" data-toggle="tab">EN</a></li>
							<li><a href="#tab3" data-toggle="tab">اسلایدر</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">

								<div class="row-form">
									<div class="span3 pull-right">عنوان * :</div>
									<div class="span9">
										<input type="text" name="title" id="title"  value="<?php echo @$_SESSION["title"];unset($_SESSION["title"]); ?>">
									</div>
								</div>

								<div class="row-form">
									<div class="span3 pull-right">خلاصه متن * :</div>
									<div class="span9">
										<textarea name="text" id="text"><?php echo @$_SESSION["text"];unset($_SESSION["text"]); ?></textarea>
									</div>
								</div>
								<div class="row-form">
									<div class="span3 pull-right">متن کامل * :</div>
									<div class="span9">
										<textarea name="more_text" id="more_text"><?php echo @$_SESSION["more_text"];unset($_SESSION["more_text"]); ?></textarea>
									</div>
								</div>

								<div class="row-form">
									<div class="span3 pull-right">(autor)نویسنده :</div>
									<div class="span9">
										<input type="text"  name="autor" id="autor" value="<?php echo @$_SESSION["autor"];unset($_SESSION["autor"]); ?>">
									</div>
								</div>

								<div class="row-form">
									<div class="span3 pull-right" >کلمات کلیدی :</div>
									<div class="span9">
										<input type="text"  name="keyword" id="keyword" value="<?php echo @$_SESSION["keyword"];unset($_SESSION["keyword"]); ?>">
									</div>
								</div>		
                                <div class="row-form">
                                    <div class="span2">: (amount)تعداد</div>
                                    <div class="span4">                                                            
                                        <input type="text" name="amount" id="amount" value="<?php echo @$_SESSION["amount"];unset($_SESSION["amount"]); ?>"/>
                                    </div>
                                    <div class="span2">: (price)قیمت</div>
                                    <div class="span4">                                                            
                                        <input type="text" name="price" id="price" value="<?php echo @$_SESSION["price"];unset($_SESSION["price"]); ?>"/>
                                    </div>                            
                                </div> 
                                <div class="row-form">
                                    <div class="span2">: (discount)تخفیف</div>
                                    <div class="span4">                                                            
                                        <input type="text" name="discount" id="discount" value="<?php echo @$_SESSION["discount"];unset($_SESSION["discount"]); ?>"/>
                                    </div>	
								</div>								

							</div>
							<div class="tab-pane" id="tab2">
								<div class="row-form">
									<div class="span3 pull-right">Title * :</div>
									<div class="span9">
										<input type="text" name="title_en" id="title_en"  value="<?php echo @$_SESSION["title_en"];unset($_SESSION["title_en"]); ?>">
									</div>
								</div>

								<div class="row-form">
									<div class="span3 pull-right">Short Text * :</div>
									<div class="span9">
										<textarea name="text_en" id="text_en"><?php echo @$_SESSION["text_en"];unset($_SESSION["text_en"]); ?></textarea>
									</div>
								</div>
								<div class="row-form">
									<div class="span3 pull-right">Complete Text * :</div>
									<div class="span9">
										<textarea name="more_text_en" id="more_text_en"><?php echo @$_SESSION["more_text_en"];unset($_SESSION["more_text_en"]); ?></textarea>
									</div>
								</div>

								<div class="row-form">
									<div class="span3 pull-right">Keywords :</div>
									<div class="span9">
										<input type="text" name="keyword_en" id="keyword_en"  value="<?php echo @$_SESSION["keyword_en"];unset($_SESSION["keyword_en"]); ?>">
									</div>
								</div>

							</div>
							<div class="tab-pane" id="tab3">

								<div class="row-form">
									<div class="span3 pull-right">تصویر شماره 1 :</div>
									<div class="span9">
										<input type="file" name="slider1" id="slider1">
									</div>
								</div>

								<div class="row-form">
									<div class="span3 pull-right">تصویر شماره 2 :</div>
									<div class="span9">
										<input type="file" name="slider2" id="slider2">
									</div>
								</div>

								<div class="row-form">
									<div class="span3 pull-right">تصویر شماره 3 :</div>
									<div class="span9">
										<input type="file" name="slider3" id="slider3">
									</div>
								</div>

								<div class="row-form">
									<div class="span3 pull-right">تصویر شماره 4 :</div>
									<div class="span9">
										<input type="file" name="slider4" id="slider4">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				</div>
				
		</div>
				
			</form>
        </div>
        
    </div> 
	
</body>

</html>

