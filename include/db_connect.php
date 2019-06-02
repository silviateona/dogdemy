<?php
//Database Source Name
$dsn = 'mysql:
			host=localhost;
			dbname=jojemdb';

$user = 'silf';
$pswd = 'woof';
$db = new PDO($dsn,$user,$pswd);

$errorMessage="this I!";

//If connection gut, check whether there's something wrong with your SQL, which otherwise fails silently
//Error handling, choose one of the 2 below:
//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); #method 1
$error_info = $db->errorInfo();
if(isset($error_info[2])){
	$errorMessage.=$error_info[2];
}
