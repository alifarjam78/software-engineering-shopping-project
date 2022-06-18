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
						<h1>افزودن نوبسنده<small>کاربر</small></h1>
					</div>
					<ul class="breadcrumb">
						<li class="active">افزودن</li>
					</ul>
					<div class="clear"></div>
                </div>  
            </div>
				<form onSubmit="" action="action/add_user.php" method="post" enctype="multipart/form-data">
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
										<h2>انتخاب تصویر</h2>                                
									</div>
								<div class="data dark">
									<div class="row-form">
										<div class="span3 pull-right">تصویر * :</div>
										<div class="span9">
											<input type="file" name="img">
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
						<div class="span7 pull-right">                

							<div class="block">                                     
								<div class="data-fluid">
									
									<div class="row-form">
										<div class="span3 pull-right">*نام:</div>
										<div class="span9"><input type="text" name="name" placeholder="first name" value="<?php echo @$_SESSION["name"];unset($_SESSION["name"]); ?>"></div>
									</div>
									<div class="row-form">
										<div class="span3 pull-right">*نام خانوادگی:</div>
										<div class="span9"><input type="text" name="l_name" placeholder="last name" value="<?php echo @$_SESSION["name"];unset($_SESSION["name"]); ?>"></div>
									</div>
									<div class="row-form">
										<div class="span3 pull-right">*ایمیل:</div>
										<div class="span9"><input type="text" name="email" placeholder="email" value="<?php echo @$_SESSION["email"];unset($_SESSION["email"]); ?>"></div>
									</div>
									<div class="row-form">
										<div class="span3 pull-right">*رمز عبور:</div>
										<div class="span9"><input type="password" name="password"  ></div>
									</div> 
									<div class="row-form">
										<div class="span3 pull-right">(اختیاری)تلفن همراه:</div>
										<div class="span9">
											<div class="input-append">
												<input type="text" name="mobile" value="<?php echo @$_SESSION["mobile"];unset($_SESSION["mobile"]); ?>">
												<span class="add-on orange"><i class="icon-user icon-white"></i></span>
											</div>                                                        
										</div>
									</div>
									<div class="row-form">
										<div class="span3 pull-right">توضیحات:</div>
										<div class="span9"><textarea placeholder="about" name="about"><?php echo @$_SESSION["about"];unset($_SESSION["about"]); ?></textarea></div>
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

