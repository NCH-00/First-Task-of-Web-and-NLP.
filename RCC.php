<?php 



$con= mysqli_connect ("localhost","root","","dirrobot") or die (mysqli_connect_error());

mysqli_query($con,"CREATE TABLE IF NOT EXISTS dr ( id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
 direction VARCHAR(10))");
 


echo"<br/>";

if (isset($_POST['btn1']))
  mysqli_query($con,"INSERT INTO dr (direction) VALUES ('Left')") or die (mysqli_connect_error()); 

elseif (isset($_POST['btn2']))
	mysqli_query($con,"INSERT INTO dr (direction) VALUES ('Right')") or die (mysqli_connect_error());
elseif (isset($_POST['btn3']))
	mysqli_query($con,"INSERT INTO dr (direction) VALUES ('Backward')") or die (mysqli_connect_error());
elseif (isset($_POST['btn4']))
	mysqli_query($con,"INSERT INTO dr (direction) VALUES ('Forward')") or die (mysqli_connect_error());
elseif (isset($_POST['btn5']))
	mysqli_query($con,"INSERT INTO dr (direction) VALUES ('Stop')") or die (mysqli_connect_error());
else
  echo "The last direction is:";
  $Result= mysqli_query ($con,"select * from dr ORDER BY id DESC LIMIT 1") or die (mysqli_connect_error());
  $row = mysqli_fetch_array($Result);
  echo $row['direction'];
 
	
?>