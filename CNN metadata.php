<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CNN metadata.css" />
    <title>Vehicle Information</title>
    <script type="text/javascript">
    	    function myfun() {
    	        var x = `"<?php
                if(isset($_REQUEST["btn_Upload"]))
				{	
					$fn=$_FILES["FU_Photo"]["name"];
					$spath=$_FILES["FU_Photo"]["tmp_name"];
					$dpath="Cars/".$fn;
					move_uploaded_file($spath, $dpath);
					$last_line = system('python main.py', $retval);
				}?>"` 	
				document.getElementById("out").innerHTML = x;
			
             }
    </script>
</head>
<body>
	<form enctype="multipart/form-data" method="post">
	<div class="d1">	
    <center> <br>
    <b><h1>Car's Verification</h1></b>

    <h4><label for="file">Select Image: </label>
    <input type="file" id="file" name="FU_Photo"  style="font-size: 15px;"/><br>
    </h4>
    <input type="submit" value="Upload" name="btn_Upload" onclick="myfun()">
    <center>
    </div>
    </form>
    <div id="out">output</div>
</body>
</html>






