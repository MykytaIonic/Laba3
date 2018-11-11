<?php
    $con = mysqli_connect("localhost","root","","Webphp4");
    if(isset($_POST['submit']))
    {
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];

        move_uploaded_file($temp,"media".$name);
        $q = "INSERT INTO `media`(`id`,`media`) VALUES ('','$name')";
        if(mysqli_query($con,$q))
        {
          echo "Delivered to DataBase";
        }
          echo "<br>".$name." File has already uploaded.";
    }
?>