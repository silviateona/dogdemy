<?php 
//Autoloader.php
try{
	require_once('../app/include/autoloader.php');
}catch(Exception $f){
	$fail = 'Dude, where\'s my autoloader?<br>'.$f->getMessage();
}
//Database inclusion
try{
	require_once('../app/include/config.php');
}catch(Exception $e){
	$e = 'Dude, where\'s my db?<br>'.$e->getMessage();
}
?>

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


$peep = new App\User\Guardian('booboo','Boo','Boobly','boo@beep.com','baa',false,'huic is me!',2);
echo 'Hello, it\'s me, '.ucfirst($peep->getUsername()).', and my gender is: '.strtoupper($peep->getGender()).'!';
echo "<br>I have ".$peep->getPetnum()." pets total!!";

//test db connection:

if($db){
	echo "Yo man, my db!!!";
}else{
	echo "No db for u, sucka!<br>";
}

//Check db works with an SQL query:
$sql = 'SELECT name FROM cat';
foreach($db->query($sql)as $row){
	echo "<br>The cat is named: ".$row['name'];
}
?>
	</body>
</html>