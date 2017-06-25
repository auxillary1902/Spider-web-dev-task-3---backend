<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$number=$_POST['deletenumber'];
$con=mysqli_connect("localhost","root" ,"","studentinfo");
if(!$con)
{
	die('Could not connect: ' . mysqli_connect_error());

}
if($number)
{
	$query="DELETE FROM noticeboard WHERE NoticeNo='$number'";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('Successfully deleted the required notice from the notice board.');</script>";
	header("Refresh:0; url=adddeleteadmin.html");
	}
	else
	{
echo "<script>alert('The notice of the given notice number does not exist.Please enter another notice number.');</script>";
	header("Refresh:0; url=adddeleteadmin.html");
	}
}
else
{
	echo "<script>alert('Please enter the notice number before pressing submit');</script>";
	header("Refresh:0; url=adddeleteadmin.html");
}


?>
</body>
</html>