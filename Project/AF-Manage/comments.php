<!DOCTYPE html>
<html lang="fa">

<head>        
    <?php include __DIR__ . "/content/head.php" ; ?>
</head>
<body>    
	<script>
		function delete_action(number,table)
		{
			$.post("action/delete.php",{"id":number,"part":table,"sb":true},function(data){
				data = data.trim();
				if(data == "success")
				{
					location.reload();
				}
				else
				{
					alert(data);	
				}
			});
		}
		function update_action(id,table)
		{
			$.post("action/update.php",{"id":id,"table":table,"sb":true},function(data){
				data= data.trim();
				if(data == "success")
				{
					location.reload();
				}
				else
				{
					alert(data);
				}
			});
		}
	</script>
    <div id="loader"><img src="img/loaders/3d_3.gif"/></div>
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
						<h1>پیام ها <small>مدیریت تمامی پیام ها</small></h1>
					</div>
					<ul class="breadcrumb">
						<li class="active">کامنت ها</li>
					</ul>
					<div class="clear"></div>
                </div>  
						<?php 
							if(isset($_SESSION["error"]))
							{	
						?>
					<div class="row-fluid">
							<div class="alert alert-success">                
								<?php echo " پیام با موفقیت حذف شد"?>
							</div>
						</div>
						<?php
								unset($_SESSION["error"]);
							}	
						?>
						<?php 
							if(isset($_SESSION["up"]))
							{	
						?>
					<div class="row-fluid">
							<div class="alert alert-success">                
								<?php echo "پیام تایید شد"?>
							</div>
						</div>
						<?php
								unset($_SESSION["up"]);
							}	
						?>
						<div class="row-fluid">
						
								<div class="block">
			<div class="head purple">
				<div class="icon"><span class="ico-folder-open"></span></div>
				<h2>لیست پیام ها</h2>                                                            
			</div>                
			<div class="data-fluid">
				<table cellpadding="0" cellspacing="0" width="100%" class="table table-hover">
					<thead>
						<tr>
							<th width="20%">
							اسم
							</th>
							<th width="15%">
							بخش
							</th>		
							<th width="15%">
							پیام
							</th>				
							<th width="20%">
							وضعیت
							</th>
							<th width="15%">
							تاریخ ارسال
							</th>
							<th width="15%">
							عملیات
							</th>
						</tr>
					</thead>
					<tbody>
			<?php
				$q = $cn->pdo->query("select * from comment order by id desc");
				$q->execute();
				while($r = $q->fetch(PDO::FETCH_ASSOC))
				{
			?>
						<tr>
							<td>
								<?php echo $r["name"] ?>
							</td>
							<td>
								<?php 
									if($r["part"] == 1 )
									{
										echo "محصولات";
									}
									else
									{	
										echo "پست ها";		
									}
								?>
							</td>
							<td>
								<?php echo $r["message"] ?>
							</td>
							<td>
							<?php
							if($r["stat"] == 1)
							{
								echo "تایید شده";
							}
							else
							{
								echo"درانتظار";
							}
							?>
							</td>
							<td>
								<?php echo $r["time"] ?>
							</td>
							<td>
								<a><button class="btn btn-danger tip" onClick="return update_action('<?php echo $r["id"]; ?>','comment');" data-original-title="تایید پیام"><span class="ico-pencil"></span></button></a>
								<?php 
								$p="../single-product.php";
									if($r["part"] == 2)
									{
										$p="../single-blog.php";
									}
								?>
								<a href="<?php echo $p; ?>?id=<?php echo $r["post_id"];?>" target="_blank"><button class="btn btn-success tip" data-original-title="مشاهده"><span class="ico-eye"></span></button></a>
								<a><button class="btn btn-danger tip" onClick="return delete_action('<?php echo $r["id"] ?>','comment');" data-original-title="حذف"><span class="ico-trash"></span></button></a>
							</td>
						</tr>
			<?php
				}
			?>
					</tbody>
				</table>
			</div>                
            
        </div>
        
    </div>
    
	
</body>

</html>

