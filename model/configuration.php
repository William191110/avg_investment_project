<?php 

class DbConfiguration{

	private $driver='mysql:host=localhost;dbname=avgdb';
	private $username='root';
	private $password='';

	protected function Connection()
	{
		try{

			 $Con=new PDO($this->driver, $this->username, $this->password);
			 $Con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 $Con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			 return $Con;

		   }
		catch(PDOException $e)
		   {
		   	 echo 'Database Connection Failed, Please try again...'.$e->getMessage();
		   }
	}
}


?>