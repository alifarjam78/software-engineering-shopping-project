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
						<h1>پست ها <small>مدیریت تمامی پست ها</small></h1>
					</div>
					<ul class="breadcrumb">
						<li class="active">پست</li>
					</ul>
					<div class="clear"></div>
                </div>  
						<?php 
							if(isset($_SESSION["error"]))
							{	
						?>
					<div class="row-fluid">
							<div class="alert alert-success">                
								<?php echo "پست با موفقیت حذف شد"?>
							</div>
						</div>
						<?php
								unset($_SESSION["error"]);
							}	
						?>
						<div class="row-fluid">
						
								<div class="block">
			<div class="head purple">
				<div class="icon"><span class="ico-folder-open"></span></div>
				<h2>لیست پست ها</h2>                                                            
			</div>                
			<div class="data-fluid">
				<table cellpadding="0" cellspacing="0" width="100%" class="table table-hover">
					<thead>
						<tr>
							<th width="30%">
							عنوان
							</th>
							<th width="25%">
							پست
							</th>
							<th width="25%">
							تاریخ ارسال
							</th>
							<th width="20%">
							عملیات
							</th>
						</tr>
					</thead>
					<tbody>
			<?php
				$q = $cn->pdo->query("select * from post order by id desc");
				$q->execute();
				while($r = $q->fetch(PDO::FETCH_ASSOC))
				{
			?>
						<tr>
							<td>
								<?php echo $r["title"] ?>
							</td>
							<td>
								<a href="../single-blog.php?id=<?php echo $r["id"]; ?>" target="_blank">مشاهده پست</a>
							</td>
							<td>
								<?php echo $r["time"] ?>
							</td>
							<td>
								<a href="new_post.php?id=<?php echo $r["id"]; ?>"><button class="btn tip" data-original-title="ویرایش"><span class="ico-pencil"></span></button></a>
								<a><button class="btn btn-danger tip" onClick="return delete_action('<?php echo $r["id"] ?>','post');" data-original-title="حذف"><span class="ico-trash"></span></button></a>
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

