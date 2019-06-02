<?php

		define('DB_DSN','mysql:host=localhost;dbname=jojemdb');
		define('DB_USER','silf');
		define('DB_PSWD','woof');
	
		$db = new PDO(DB_DSN,DB_USER,DB_PSWD);
	
	



//If connection gut, check whether there's something wrong with your SQL, which otherwise fails silently
//Error handling, choose one of the 2 below:
//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); #method 1
function sqlErrorCheck(){
	$error_info = $db->errorInfo();
	if(isset($error_info[2])){
		$errorMessage="got SQL booboo: ";
		$errorMessage.=$error_info[2];
		return $errorMessage;
	}
}



