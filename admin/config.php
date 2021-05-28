<?php

class Database{
	
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="quiz_oops";
	
	public $link;

public function __construct()
	{
		$this->connectDB();
	}
	
	private function connectDB()
	{
		
		$this->link=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->link->connect_errno)
		{
			die ("database connection failed".$this->link->connect_errno);
		}
				
	}

public function signin($username,$pass)
	{
		$query=$this->link->query("select username,password from admin where username='$username' and password='$pass'");
	    $query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$_SESSION['username']=$email;
			return true;
		}
		else
		{
			return false;
		}
	
	}	
	
	public function select($query){
		$result= $this->link->query($query) or die ($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		}
		
		else {
			
			return false;
		}
				
	}
	
	public function delete($query){
		$delete= $this->link->query($query) or die ($this->link->error.__LINE__);
		if($delete){
			
			header("Location: home.php?msg=".urlencode('Data Deleted Successfully.'));
			exit();
			
		}else{
			die("Error: (".$this->link->errno.")".$this->link->error);
		}
		
	}
	
	
	public function url($url)
	{
		header("location:".$url);
	}
}

?>