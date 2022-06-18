
<!DOCTYPE html>
<html lang="fa">
<?php $login_page = true; ?>
<?php include __DIR__ . "/content/head.php" ; ?>
<?php
	if(isset($_SESSION["username"]))
	{
		header("location:index.php");
		exit("404 - not fount");
	}
?>
		<script src="action/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#sb").click(function(){
					$("#error").html("<img src='img/loaders/3d_3.gif'>");
					$("#username").css("border","");
					$("#password").css("border","");
					var username = $("#username").val();
					var password = $("#password").val();
					if(username == "")
					{
						$("#error").html("please enter your username !");
						$("#username").focus();
						$("#username").css("border","1px solid #B10002");
					}
					else if(password == "")
					{
						$("#error").html("please enter your password !");
						$("#password").focus();
						$("#password").css("border","1px solid #B10002");
					}
					else
					{
						$.post("action/login.php",{"username":username,"password":password,"sb":true},function(data){
							data = data.trim();
							switch(data)
							{
								case "1":
									$("#error").html("please fill inputs");
								break;
								case "2":
									$("#error").html("information is not correct");
								break;
								case "success":
									$("#error").css("color","green");
									$("#error").html("you logged successfully");
									document.location.reload();
								break;
							}
						});
					}
					
				});
			});
		</script>
<body>    
    <div id="loader"><img src="img/loader.gif"/></div>
    <div class="login" >

        <div class="page-header">
            <div class="icon">
                <span class="ico-arrow-left"></span>
            </div>
            <h1>ورود <small>قالب مدیریت سایت</small></h1>
        </div>        
       	<p style="color: #B10002;" id="error"></p>
        <div class="row-fluid">
            <div class="row-form">
                <div class="span12">
                    <input type="text" id="username" name="login" placeholder="ایمیل"/>
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="password"  id="password" name="password" placeholder="رمزعبور"/>
                </div>            
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="checkbox"/> مرا به خاطر داشته باش
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <button class="btn" name="sb" id="sb" type="submit">ثبت نام <span class="icon-arrow-left icon-white"></span></button>
                </div>                
            </div>
        </div>
    </div>
</body>

</html>
