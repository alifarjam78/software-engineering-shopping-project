<?php
	class product
	{
		protected $pdo;
		public $id,$img,$cat_id,$amount,$discount,$price,$about,$name,$text,$keyword,$times,$autor,$attr;
		function __construct($cn)
		{
			$this->pdo = $cn;
		}
		function view_product()
		{
			$this->pdo->set_table("prodect");
			$q = $this->pdo->select();
			return $q;
		}
		function view_comming()
		{
			$this->pdo->set_table("prodect");
			$q = $this->pdo->select("amount = :amount",array("amount" => 0));
			return $q;
		}
		function product($id)
		{
			if ($id == "")
			{
				header("location:404.php");
				exit();
			}
			else 
			{
				$this->pdo->set_table("prodect");
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
					$this->name = $p["name"];
					$this->cat_id = $p["cat_id"];
					$this->text = $p["text"];
					$this->keyword = $p["keyword"];
					$this->attr = $p["attr"];
					$this->times = $p["time"];
					$this->autor = $p["autor"];
					$this->amount = $p["amount"];
					$this->discount = $p["discount"];
					$this->price = $p["price"];
					$this->about = $p["about"];
					return true;
				}
			}
		}
	}
?>