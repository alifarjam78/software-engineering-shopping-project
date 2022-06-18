<?php
	if(isset($_POST["submit"]))
	{
		 require_once "../../AF-include/config.php";
		 $cn = new database();
		 $id = $_POST["post_id"];
			if($_POST["name"] == "" or $_POST["email"] == "" or $_POST["number"] == "" or $_POST["message"] == "")
			{
				return "اطلاعات کافی نیست";
			}
				$input = array ("name" => $cn->sec($_POST["name"]), "email" => $cn->sec($_POST["email"]), "number" =>  $cn->sec ($_POST["number"]),"message" =>  $cn->sec ($_POST["message"]));
				if(!filter_var($input["email"],FILTER_VALIDATE_EMAIL ))
				{
					return "email format is not corecrt";
				}
				else
				{	
					$query = "INSERT INTO comment (name,email,message,part,post_id) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."','1','".$id."')";
					$query = $cn->pdo->prepare($query);
					$query->execute();
					return "success";
				}
	}
?>