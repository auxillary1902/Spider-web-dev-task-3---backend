<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$type=$_POST['typenote'];
$notice=$_POST['notice'];
$number=$_POST['number'];
$con=mysqli_connect("localhost","root" ,"","studentinfo");
if(!$con)
{
	die('Could not connect: ' . mysqli_connect_error());

}
if($type&&$notice&&$number)
{
$query="INSERT INTO noticeboard VALUES('$type','$notice','$number')";
$result=mysqli_query($con,$query);
if($result)
{
	echo "<script>alert('Successfully added a new notice onto the notice board.');</script>";
	header("Refresh:0; url=adddeleteadmin.html");

}
else
{
		echo "<script>alert('Error in adding a new notice in the notice board.');</script>";
	header("Refresh:0; url=adddeleteadmin.html");
}

}
else
{
echo "<script>alert('Please enter all the details of the notice to add it');</script>";
	header("Refresh:0; url=adddeleteadmin.html");
}

?>
</body>
</html>