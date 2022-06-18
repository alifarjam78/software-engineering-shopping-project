<?php
require_once __DIR__ . "/../../AF-Include/config.php";

if(isset($_POST["sb"]))
{
	$cn = new database();
	$header = "location:../new_post.php";
	$require_input = array(
		"title" => $_POST["title"],
		"title_en" => $_POST["title_en"],
		"text" => $_POST["text"],
		"text_en" => $_POST["text_en"],
		"mor_text" => $_POST["more_text"],
		"more_text_en" => $_POST["more_text_en"],
		"category" => $_POST["category"]
	);
	
	$input = array(
		"autor" => $_POST["autor"],
		"keyword" => $_POST["keyword"],
		"keyword_en" => $_POST["keyword_en"],
	);
	
	$img = array(
		"name" => $_FILES["img"]["name"],
		"tmp_name" => $_FILES["img"]["tmp_name"],
		"size" => $_FILES["img"]["size"],
		"type" => $_FILES["img"]["type"],
	);
	
	$_SESSION["title"] = $require_input["title"];
	$_SESSION["title_en"] = $require_input["title_en"];
	$_SESSION["text"] = $require_input["text"];
	$_SESSION["text_en"] = $require_input["text_en"];
	$_SESSION["more_text"] = $require_input["more_text"];
	$_SESSION["more_text_en"] = $require_input["more_text_en"];
	$_SESSION["autor"] = $input["autor"];
	$_SESSION["keyword"] = $input["keyword"];
	$_SESSION["keyword_en"] = $input["keyword_en"];
	
	if(in_array("",$require_input))
	{
		$_SESSION["error"] = "فیلد های درخواستی را وارد نمایید";
		header($header);
	}
	else if(!is_numeric($require_input["category"]))
	{
		$_SESSION["error"] = "دسته انتخابی مجاز نمیباشد";
		header($header);
	}
	else if($img["name"] == "")
	{
		$_SESSION["error"] = "تصویر محصول را انتخاب کنید.";
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
			
			$q = $cn->pdo->prepare("INSERT INTO post (img,category,title,title_en,text,text_en,mor_text,more_text_en,autor,keyword,keywords_en,time) VALUES (:img,:category,:title,:title_en,:text,:text_en,:mor_text,:more_text_en,:autor,:keyword,:keyword_en,:time)");
			$q->execute(array(
				":img" => $upload_address,
				":category" => $require_input["category"],
				":title" => $require_input["title"],
				":title_en" => $require_input["title_en"],
				":text" => $require_input["text"],
				":text_en" => $require_input["text_en"],
				":mor_text" => $require_input["mor_text"],
				":more_text_en" => $require_input["more_text_en"],
				":autor" => $input["autor"],
				":keyword" => $input["keyword"],
				":keyword_en" => $input["keyword_en"],
				":time" => time(),
			));
				
			unset($_SESSION["title"]);
			unset($_SESSION["title_en"]);
			unset($_SESSION["text"]);
			unset($_SESSION["text_en"]);
			unset($_SESSION["mor_text"]);
			unset($_SESSION["more_text_en"]);
			unset($_SESSION["autor"]);
			unset($_SESSION["keyword"]);
			unset($_SESSION["keyword_en"]);
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