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
						<h1>صفحه اصلی <small>خوش آمدید</small></h1>
					</div>
					<ul class="breadcrumb">
						<li class="active">صفحه اصلی</li>
					</ul>
					<div class="clear"></div>
                </div>  
            </div>
            
        </div>
        
    </div>
    
    <div class="dialog" id="source" style="display: none;" title="Source"></div> 
	
</body>

</html>

