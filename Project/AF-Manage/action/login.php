<?php
require_once "../../AF-Include/config.php";

if(isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["sb"]))
{
	$cn = new database();
	$username = $_POST["username"];
	$password = $_POST["password"];
	if($username == "" or $password == "")
	{
		echo "1";
	}
	else
	{
		$q = $cn->pdo->prepare("select * from user where name = :username or l_name = :username and password = :password");
		$q->execute(array(
			":username" => $username,
			":password" => $password
		));
		if($q->rowCount() == 1)
		{
			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;
			echo "success";
		}
		else
		{
			echo "2";
		}
	}
}
else
{
	header("location:../../404.php");
}
?>