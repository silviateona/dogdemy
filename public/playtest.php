<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PLAYTEST - DEV</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../styles/style.css">
		<link rel="icon" href="../favicon.png">
	</head>
	<body>
<?php 
require_once('../app/php/person.php');
require_once('../app/php/guardian.php'); //TODO:refine the php document path for requires/includes
$peep = new Guardian('booboo','Boo','Boobly','boo@beep.com','baa',false,'huic is me!',2);
echo 'Hello, it\'s me, '.ucfirst($peep->getUsername()).', and my gender is: '.strtoupper($peep->getGender()).'!';
echo "<br>I have ".$peep->getPetnum()." pets total!!";
?>
	</body>
</html>