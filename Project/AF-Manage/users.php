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
						<h1>نویسنده ها <small>مدیریت تمامی کاربر ها</small></h1>
					</div>
					<ul class="breadcrumb">
						<li class="active">مدیریت</li>
					</ul>
					<div class="clear"></div>
                </div>  
						<?php 
							if(isset($_SESSION["error"]))
							{	
						?>
					<div class="row-fluid">
							<div class="alert alert-success">                
								<?php echo "کاربر با موفقیت حذف شد"?>
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
				<h2>لیست کاربر ها</h2>                                                            
			</div>                
			<div class="data-fluid">
				<table cellpadding="0" cellspacing="0" width="100%" class="table table-hover">
					<thead>
						<tr>
							<th width="25%">
							نام
							</th>
							<th width="20%">
							ایمیل
							</th>
							<th width ="20%">
							پسوند
							</th>
							<th width="20%">
							درباره کاربر
							</th>
							<th width="15%">
							عملیات
							</th>
						</tr>
					</thead>
					<tbody>
			<?php
				$q = $cn->pdo->query("select * from user order by id desc");
				$q->execute();
				while($r = $q->fetch(PDO::FETCH_ASSOC))
				{
					$q2 = $cn->pdo->prepare("select * from user where name = :username");
					$q2->execute(array(
						":username" => $_SESSION["username"]
					));
					$admin = $q2->fetch(PDO::FETCH_ASSOC);
					if($admin["id"] == 1 )
					{
						$pass = $r["password"];
					}
					else
					{
						 $pass="مجاز نیستید";
					}
			?>
						<tr>
							<td>
								<?php echo $r["name"]; ?> <?php echo $r["l_name"]; ?>
							</td>
							
							<td>
								<?php echo $r["email"]; ?>
							</td>
							<td>
								<?php 
									echo $pass;
								?>
							</td>
							<td>
								<?php echo $r["about"] ?>
							</td>
							<td>
								<a href="new_user.php?id=<?php echo $r["id"]; ?>"><button class="btn tip" data-original-title="ویرایش"><span class="ico-pencil"></span></button></a>
								<a><button class="btn btn-danger tip" onClick="return delete_action('<?php echo $r["id"] ?>','user');" data-original-title="حذف"><span class="ico-trash"></span></button></a>
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

