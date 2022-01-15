<?php
	require_once 'conn.php';
	
	if(ISSET($_REQUEST['file_id'])){
		$file = $_REQUEST['file_id'];
		$query = $conn->prepare("SELECT * FROM `file` WHERE `file_id`='$file'");
		$query->execute();
		$fetch = $query->fetch();
	
		header("Content-Disposition: attachment; filename=".$fetch['file']);
		header("Content-Type: application/octet-stream;");
		readfile("uploads/".$fetch['file']);
	}
?>