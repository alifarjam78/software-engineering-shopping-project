<?php
	class post
	{
		protected $pdo;
		public  $id,$img,$category,$text,$title,$mor_text,$keyword,$time,$autor;
		function __construct($cn)
		{
			$this->pdo = $cn;
		}
		function view_post()
		{
			$this->pdo->set_table("post");
			$q = $this->pdo->select();
			return $q;
		}
		function post($id)
		{
			if ($id == "")
			{
				header("location:404.php");
				exit();
			}
			else 
			{
				$this->pdo->set_table("post");
				$q = $this->pdo->select("id = :id",array("id" => $id));
				$row = $q->rowCount();
				if($row == 0)
				{
					header("location:404.php");
					exit();
				}
				else
				{
					$p = $q->fetch(PDO::FETCH_ASSOC);
					$this->id = $p["id"];
					$this->img = $p["img"];
					$this->title = $p["title"];
					$this->category = $p["category"];
					$this->mor_text = $p["mor_text"];
					$this->keyword = $p["keyword"];
					$this->time = $p["time"];
					$this->autor = $p["autor"];
					$this->text = $p["text"];
					return true;
				}
			}
		}
	}
?>