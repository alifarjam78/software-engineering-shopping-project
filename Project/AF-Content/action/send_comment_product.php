	<script src="jquery.min.js"></script>
	<script type="text/javascript">
		function chek()
		{
			$("#error").html("");
			$("#email").css("border","");
			$("#message").css("border","");
			$("#name").css("border","");
			$("#number").css("border","");
			var email = $("#email").val();
			var message = $("#message").val();
			var number = $("#number").val();
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
			else if(number == "")
			{
				$("#error").html("pleas inter your number");
				$("#number").focus();
				$("#number").css("border","1px solid #B10002");
			}
			else if(message == "")
			{
				$("#error").html("pleas inter your message");
				$("#message").focus();
				$("#message").css("border","1px solid #B10002");
			}
			else 
			{
				$.post("AF-Content/action/action2.php",{"post_id":<?php echo $id ?>,"name":name,"email":email,"number":number,"message":message,"submit":true},function(data)
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
			<div class="col-lg-6">
				<div class="review_box">
					<h4>Post a comment</h4>
					<p style="color: #B10002;" id="error"></p>
							<form class="row contact_form" onSubmit="return chek();" id="contactForm" novalidate="novalidate" >
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
									</div>
								</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
							</form>
				</div>