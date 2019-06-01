<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../styles/style.css">
		<link rel="icon" href="../favicon.png">
	</head>
	<body>
<?php 
require_once('../app/php/person.php');
$peep = new Person('booboo','Boo','Boobly','boo@beep.com','baa',false,'huic is me!');
echo 'Hello, it\'s me, '.ucfirst($peep->getUsername()).', and my gender is: '.strtoupper($peep->getGender()).'!';

?>
	</body>
</html>