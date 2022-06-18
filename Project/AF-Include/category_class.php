<?php
	class category
	{
		protected $pdo;
		public $id,$part,$name,$keyword,$img,$parent_id;
		function __construct($cn)
		{
			$this->pdo = $cn;
		}
		function view_category()
		{
			$this->pdo->set_table("category");
			$q = $this->pdo->select("part = :part",array(":part" => 1 ));
			return $q;
		}
		function parent_cat()
		{
			$this->pdo->set_table("category");
			$q = $this->pdo->select("parent_id = :id",array(":id" => 0));
			return $q;
		}
	}
?>