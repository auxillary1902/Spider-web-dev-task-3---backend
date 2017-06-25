<!DOCTYPE html>
<html>
<head>
	<title>List of Students,Admin,ClassReps in the database</title>
</head>
<body>
<style type="text/css">
	table{
		font-size: 180%;
	}
	p{text-align: center;
		font-size: 130%;
		font-family: cursive;
		border:3px solid;
		border-radius: 3px;
		background-color: #BB12E5;
		color: white;
	}
</style>
<p>The existing list of people in the database are:</p><br>
<table align="center" border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;">
<thead>
	<th>First Name:</th>
	<th>Last Name:</th>
	<th>Roll No.</th>
	<th>Username</th>
	<th>Status</th>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","studentinfo");
if(!$con)
{
	die('Could not connect: ' . mysqli_connect_error());

}
$query="SELECT FirstName,LastName,RollNo,Username,Status FROM studentdata";
$result=mysqli_query($con,$query);
$numrows=mysqli_num_rows($result);
if($numrows==0)
{
	echo "No Notices are present as of now on this Notice board. Check back later.";
}
while($row = mysqli_fetch_assoc($result))
{echo
        	"<tr>
        	<td>{$row['FirstName']}</td>
        	<td>{$row['LastName']}</td>
        	<td>{$row['RollNo']}</td>
        	<td>{$row['Username']}</td>
        	<td>{$row['Status']}</td>
        	<tr>\n";


}


?>
</tbody>
</table>
</body>
</html>