<?php
	
if(isset($_REQUEST["btn_Upload"]))
{
	echo $_FILES["FU_Photo"]["name"]."<br>";
	echo $_FILES["FU_Photo"]["size"]."<br>";
	echo $_FILES["FU_Photo"]["type"]."<br>";
	echo $_FILES["FU_Photo"]["tmp_name"]."<br>";
	
	$fn=$_FILES["FU_Photo"]["name"];
	$spath=$_FILES["FU_Photo"]["tmp_name"];
	$dpath="Cars/".$fn;
	
	move_uploaded_file($spath, $dpath);
	
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CNN metadata.css" />
    <title>Vehicle Information</title>
</head>
<body>
	<form enctype="multipart/form-data" method="post">
	<div class="d1">	
    <center> <br>
    <b><h1>Car's Verification</h1></b>

    <h4><label for="file">Select Image: </label>
    <input type="file" id="file" name="FU_Photo"  style="font-size: 15px;"/><br><br><br><br><br>
    </h4>
    <input type="submit" value="Upload" name="btn_Upload">
    <center>
  </div>
   </form>
  
</body>
</html>






