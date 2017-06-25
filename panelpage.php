<!DOCTYPE html>
<html>
<head>
	<title>Panel Page</title>
</head>
<body>
<style type="text/css">
	p{
		text-align: center;
		font-family: cursive;
		font-size: 130%;
		
	}
	marquee{
		color: white;
	}
	div.link{
		text-align: center;
	}
</style>
<marquee behavior="scroll" loop="100" direction="right" bgcolor="#121CE5" scrolldelay="30">Welcome to the Panel only page, administrator</marquee>
<p>This page is only for administrators. Here you can change the permission levels of the students to be class representatives or administrators.</p><br>
<div class="link">
<a href="viewstudents.php" target="_blank">Click here to view the existing list of students and administrators</a><br></div>
<br>
<p>To change the status of the people in the list, enter the following details and click submit. You can then view the list using the link above</p>
<br>
<form action="changestatus.php" method="POST">
<table align="center">
<tr>
<td>Enter the Roll No of the person whose status is to be changed:</td>
<td align="center"><input type="text" name="rollchange"></td>
</tr>
<tr>
<td>Enter the new status:</td>
<td align="center"><select name="option">
	<option>Student</option>
	<option>Admin</option>
	
</select></td>
</tr>
<tr>
<td colspan="3"><input type="submit" value="Submit"></td>
</tr>
</table>

<br>
<div class="link">
<a href="homeadmin.php">Click here to go back to your dashboard administrator</a>
</div>
</body>
</html>