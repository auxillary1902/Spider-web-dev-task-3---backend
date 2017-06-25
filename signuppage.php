<!DOCTYPE html>
<html>
<head>
	<title>signed up</title>
</head>
<body>
<?php

$first=$_POST['fname'];
$last=$_POST['lname'];
$rno=$_POST['rno'];
$dep=$_POST['dpt'];
$usr=$_POST['username'];
$passw=$_POST['pass'];
$hash=md5($passw);
$cont=mysqli_connect("localhost","root" ,"","studentinfo");

if(!$cont)
{
	die('Could not connect: ' . mysqli_connect_error());

}
$check="SELECT * FROM studentdata";
$resultcheck=mysqli_query($cont,$check);
$num=mysqli_num_rows($resultcheck);
if($num!=0)
{while($row=mysqli_fetch_assoc($resultcheck))
	{if(($row['Username']==$usr)&&($row['RollNo']==$rno))
	{
		echo "<script>alert('The username and roll number already exists. please enter again');</script>";
		header("Refresh:0; url=loginform.html");
	}

	}
$query="INSERT INTO studentdata VALUES('$first','$last','$rno','$dep','$usr','$hash','student')";
$result=mysqli_query($cont,$query);
if($result)
{
echo "<script type='text/javascript'>\n"; echo "alert('you are Succesfully registered');\n"; echo "</script>";
echo "<a href='loginpage.html'>Click to login using the new credentials</a>";
}
else
{
	echo "error in inserting into the database\n";
	echo "<a href='loginform.html'>Click to signup again</a>";
}
}
else
{
	$query="INSERT INTO studentdata VALUES('$first','$last','$rno','$dep','$usr','$hash','student')";
$result=mysqli_query($cont,$query);
if($result)
{
echo "<script type='text/javascript'>\n"; echo "alert('you are Succesfully registered');\n"; echo "</script>";
echo "<a href='loginpage.html'>Click to login using the new credentials</a>";
}
else
{
	echo "error in inserting into the database\n";
	echo "<a href='loginform.html'>Click to signup again</a>";
}
}

?>
</body>
</html>