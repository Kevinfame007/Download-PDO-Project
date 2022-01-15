<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=db_pdo_download', 'root', '');
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>