<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>	
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Download File Using PDO</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<center>
			<form method="POST" action="upload.php" enctype="multipart/form-data">
				<div class="form-inline">
					<input type="file" class="form-control" name="file" required="required"/>
					<button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> Upload</button>
				</div>
			</form>
		</center>
		<br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>File</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'conn.php';
					$query = $conn->prepare("SELECT * FROM `file`");
					$query->execute();
					while($fetch = $query->fetch()){
				?>
				<tr>
					<td><?php echo $fetch['file']?></td>
					<td><a href="download.php?file_id=<?php echo $fetch['file_id']?>" class="btn btn-primary">Download</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>	
</html>