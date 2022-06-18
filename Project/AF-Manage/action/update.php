<?php
require_once "../../AF-Include/config.php";

if(isset($_POST["sb"]) and isset($_POST["table"]) and isset($_POST["id"]))
{
	$cn = new database();
	$part = $_POST["table"];
	$id = $_POST["id"];
	if(is_numeric($id))
	{
		$id = intval($id);
		$q_string = "select * from ".$part." where id = :id";
		$q = $cn->pdo->prepare($q_string);
		$q->execute(array(
			":id" => $id
		));
		if($q->rowCount() == 1)
		{
			$query = "UPDATE ".$part." SET stat = 1 WHERE id = :id";
			$query2 = $cn->pdo->prepare($query);
			$query2->execute(array(
				":id" => $id
			));
			$_SESSION["up"] = true;
			echo "success";
		}
		else
		{
			echo "failed";
		}
	}
	else
	{
		header("location:../404.php");
	}
}
else
{
	header("location:../404.php");
}
?>