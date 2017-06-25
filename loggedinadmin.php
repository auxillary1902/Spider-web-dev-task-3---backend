<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$usr=$_POST['username'];
$pass=$_POST['pass'];
$hash=md5($pass);

if($usr&&$pass)
{
$con=mysqli_connect("localhost","root" ,"","studentinfo");
if(!$con)
{
	die('Could not connect: ' . mysqli_connect_error());

}
$query="SELECT * FROM studentdata WHERE Username='$usr' AND Status='admin'";
$result=mysqli_query($con,$query);
$numrows=mysqli_num_rows($result);
if($numrows!=0)
{
while($row=mysqli_fetch_assoc($result))
{
	$dbusername=$row['Username'];
	$dbpassword=$row['Password'];
	
	if((strcmp($usr,$dbusername)==0)&&(strcmp($dbpassword,$hash)==0))
	{
		echo file_get_contents("homeadmin.php");
	}
	else
		{echo "<script type='text/javascript'>alert('Invalid username or password');</script>";
header("Refresh:0; url=loginpageadmin.html");}

}

}
else
{echo "<script type='text/javascript'>alert('The user with Given credentials does not exist on this server. Please sign up.');</script>";
header("Refresh:0; url=loginpage.html");
}


}
else
{
	echo "<script type='text/javascript'>alert( 'Please enter a Username and a password')</script>";
	header("Refresh:0; url=loginpageadmin.html");
}

?>
</body>
</html>