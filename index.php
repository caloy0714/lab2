<?php
include "register.php";
//define user, hosts, password

$dsn = 'mysql:dbname='.DB.';hosts'.HOST;
$pdo=new PDO($dsn, DB_USER, DB_PASS);

if ($result !== FALSE) {
	$fileObj = new File($_FILES['input_file']['name'], $result['path'], $result['type']);
	$result = $fileObj->save();

	header('Location: index.php?success=1');

}