<script src="jquery.min.js"></script>
	<script type="text/javascript">
		function chek()
		{
			$("#error").html("");
			$("#email").css("border","");
			$("#message").css("border","");
			$("#name").css("border","");
			$("#title").css("border","");
			var email = $("#email").val();
			var message = $("#message").val();
			var title = $("#title").val();
			var name = $("#name").val();
			if(name == "")
			{
				$("#error").html("pleas inter your name");
				$("#name").focus();
				$("#name").css("border","1px solid #B10002");
			}
			else if(email == "")
			{
				$("#error").html("pleas inter your email");
				$("#email").focus();
				$("#email").css("border","1px solid #B10002");
			}
			else if(title == "")
			{
				$("#error").html("pleas inter your title");
				$("#title").focus();
				$("#title").css("border","1px solid #B10002");
			}
			else if(message == "")
			{
				$("#error").html("pleas inter your message");
				$("#message").focus();
				$("#message").css("border","1px solid #B10002");
			}
			else 
			{
				$.post("AF-Content/action/action.php",{"post_id":<?php echo $id ?>,"name":name,"email":email,"title":title,"message":message,"submit":true},function(data)
				{
					data = data.trim();
					if(data == "success")
					{
						$("#contact").css("color","#117000");
						$("#contact").html("نظر شما با موفقیت ثبت شد");
					}
					else
					{
						$("#error").html(data);
					}
					location.reload();
				});
			}
				return false;
		}
	</script>
	<div class="comment-form" id="contact">
<h4>ارسال کامنت </h4>
	<form onSubmit="return chek();" >
	<p style="color: #B10002;" id="error"></p>
		<div class="form-group form-inline">
			<div class="form-group col-lg-6 col-md-6 name">
				<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''"
					onblur="this.placeholder = 'Enter Name'">
			</div>
			<div class="form-group col-lg-6 col-md-6 email">
				<input type="email" class="form-control" id="email" placeholder="Enter email address"
					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
			</div>
		</div>
			<div class="form-group">
				<input type="text" class="form-control" id="title" placeholder="title" onfocus="this.placeholder = ''"
					onblur="this.placeholder = 'title'">
			</div>
			<div class="form-group">
				<textarea class="form-control mb-10" rows="5" id="message" name="message" placeholder="Messege"
					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
			</div>
		<input type="submit" id="submit" name="submit" value="ارسال" class="primary-btn submit_btn">
	</form>
	</div>