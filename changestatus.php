<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$roll=$_POST['rollchange'];
$status=$_POST['option'];
$con=mysqli_connect("localhost","root","","studentinfo");
if(!$con)
{
	die('Could not connect: ' . mysqli_connect_error());

}
$query="UPDATE studentdata SET Status='$status' WHERE RollNo='$roll'";
$result=mysqli_query($con,$query);
$num=mysqli_affected_rows($con);
if($num!=0)
{
	
		echo "<script>alert('Successfully changed the status of the person in the database');</script>";
	header("Refresh:0; url=panelpage.php");
}
else
{
	echo "<script>alert('Nobody with that roll number found on the database');</script>";
		header("Refresh:0; url=panelpage.php");
}
?>
</body>
</html>