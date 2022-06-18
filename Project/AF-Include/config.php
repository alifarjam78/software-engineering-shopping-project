<?php
session_start();
ob_start();
class database
{
	public $pdo,$table,$order = "",$limit = "",$lang="";
	
	function __construct()
	{
		$db = parse_ini_file(__DIR__."/database.ini");
		$dsn = "mysql:host=".$db["host"].";dbname=".$db["dbname"];
		
		try
		{
			$this->pdo = new PDO($dsn,$db["username"],$db["password"]);
			$this->pdo->exec("set charset utf8");
			$this->pdo->exec("set names utf8");
			return $this->pdo;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	function set_language($lang)
	{
		if($lang == "en" or $lang == "english")
		{
			$this->lang = "_en";
		}
		else
		{
			$this->lang = "";
		}
	}
	
	function set_table($table)
	{
		$this->table = $table;
	}
	
	function set_order($order)
	{
		$this->order = "order by ".$order;
	}
	
	function set_limit($limit)
	{
		
	}
	
	function select($condition = "",$condition_value = "",$count = false)
	{
		if($this->table == "")
		{
			return false;
		}
		else
		{
			$query_string = "select * from ".$this->table;
			
			if($condition != "")
			{
				if(is_array($condition_value) and $condition_value != "")
				{
					$query_string.= " where ".$condition;
					
					if($this->order != "")
						$query_string .= " ".$this->order;
					if($this->limit != "")
						$query_string .= " ".$this->limit;
					
					$query = $this->pdo->prepare($query_string);
					$query->execute($condition_value);
				}
				else
				{
					return false;
				}
			}
			else{				
					if($this->order != "")
						$query_string .= " ".$this->order;
					if($this->limit != "")
						$query_string .= " ".$this->limit;
					
					$query = $this->pdo->query($query_string);
					$query->execute();
			}
			
			$this->order = "";
			$this->limit = "";
			
			if($count == true)
				return $query->rowCount();
			else
				return $query;
		}
	}
	function setting($name)
	{
		$this->table = "setting";
		$q = $this->select("name = :name",array(":name" => $name));
		$r = $q->fetch(PDO::FETCH_ASSOC);
		return $r["value".$this->lang];
	}
		function sec($input)
	{
		$input = trim($input) ;
		$input = htmlspecialchars($input) ;
		$input = stripslashes($input) ;
			return $input;
	}
}
?>