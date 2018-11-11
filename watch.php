<?php
	$con = mysqli_connect("localhost","root","","Webphp4");
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$q = "select media from media where id=$id";
		$query = mysqli_query($con,$q);
		while($row=mysqli_fetch_assoc($query))
		{
			$name = $row['media'];
		}
		echo "<video width='400' controls><source src='media/".$name."' type='video/webm'></video>";
	}
?>