<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="media.css">
</head>
<body>
  <div id="media" width="200">
  	<form action="upload.php" id="form" method="post" enctype="multipart/form-data">
  	<input type="file" id="file" name="file"/>
  	<input type="submit" name="submit" class="submit" value="Upload media"/>
  	</form>
  </div>
<div class="watch move">
<?php
$con = mysqli_connect("localhost","root","","Webphp4");
?>
	<?php
	$q = "select * from media";
	$query = mysqli_query($con,$q);
	while($row=mysqli_fetch_assoc($query))
	{
		$id = $row['id'];
		$name = $row['media'];
		echo "<a href='watch.php?id=$id'>$name</a><br>";
	} 
?>
</div>
</body>
</html>