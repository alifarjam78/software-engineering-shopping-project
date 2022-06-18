<?php
	require_once __DIR__ . "/../../AF-Include/config.php";
	if(isset($_POST["sb"]))
	{
	$cn = new database();
	$header = "location:../new_user.php";
	$require_inpute = array (
		"name" => $_POST["name"],
		"about" => $_POST["about"],
		"l_name" => $_POST["l_name"],
		"email" => $_POST["email"],
		"password" => $_POST["password"]
	);
		
	$input = $_POST["mobile"];
		
	$img = array (
		"name" => $_FILES["img"]["name"],
		"tmp_name" => $_FILES["img"]["tmp_name"],
		"size" => $_FILES["img"]["size"],
		"type" => $_FILES["img"]["type"]
	);
		$_SESSION["name"] = $require_input["name"];
		$_SESSION["about"] = $require_input["about"];
		$_SESSION["email"] = $require_input["email"];
		$_SESSION["l_name"] = $require_input["l_name"];
		$_SESSION["password"] = $require_input["password"];
		$_SESSION["mobile"] = $input;
		
		if(in_array("",$require_inpute))
		{
			$_SESSION["error"] = "لطفا فیلد های درخواستی را پر کنید" ;
			header($header);
		}
		else if($img["name"] == "")
		{
			$_SESSION["error"] = "تصویر خود را انتخاب کنید";
			header($header);
		}
		else if($img["type"] != "image/jpeg" && $img["type"] != "image/png" && $img["type"] != "image/gif")
		{
			$_SESSION["error"] = "تصویر ارسالی مجاز نمیباشد";
			header($header);
		}
		else if(!getimagesize($img["tmp_name"]))
		{
			$_SESSION["error"] = "تصویر ارسالی مجاز نمیباشد";
			header($header);
		}
		else
		{
			$upload_directory = "../../AF-Include/theme/img/".$img["name"];
			$upload_address = "AF-Include/theme/img/".$img["name"];
			
			if(file_exists($upload_directory))
			{
				$_SESSION["error"] = "فایل ارسالی ، قبلا در سیستم ذخیره شده است";
				header($header);
			}
			else
			{
				move_uploaded_file($img["tmp_name"],$upload_directory);
				
				$q = $cn->pdo->prepare("INSERT INTO user (name,l_name,email,password,mobile,about) VALUES (:name,:l_name,:email,:password,:mobile,:about) ");
				$q->execute(array(
				"name" => $require_input["name"],
				"l_name" => $require_input["l_name"],
				"email" => $require_input["email"],
				"password" => $require_input["password"],
				"mobile" => $input,
				"about" => $require_input["about"],
				"img" => $upload_directory
				));
				
				unset($_SESSION["name"]);
				unset($_SESSION["l_name"]);
				unset($_SESSION["email"]);
				unset($_SESSION["password"]);
				unset($_SESSION["mobile"]);
				unset($_SESSION["about"]);
				$_SESSION["error"] = "success";
				header($header);
			}
		}
	}
else
{
	header("location:../../404.php");
}
?>