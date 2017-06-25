<!DOCTYPE html>
<html>
<head>
	<title>Bulletin Board Of Notices</title>
</head>
<body background="https://images.freecreatives.com/wp-content/uploads/2016/08/Cork-Surface-Clipboard-Pattern.jpg">
<style type="text/css">
	table{
		font-size: 180%;
		max-width: 1000px;
		overflow: scroll;
	}
	tr{
		max-width: 800px;
		overflow: scroll;
	}
	h1{
		font-size: 150%;
		font-family: cursive;
		border:3px solid #0FB7BA;
		background-color: #7E0FBA;
		border-radius: 3px;
		text-align: center;
		color: white;
	}
	p{text-align: center;
		font-size: 130%;
		font-family: cursive;
		background-color:#0F3EBA;
color: white;

	}
	div.overall{
		background-color: #E5D512;
	}
	a{
		
		border:2px solid green;
		background-color: blue;
		color: white;
		font-family: cursive;
		font-size: 140%;
	}
	div.link{
		text-align: center;
	}
</style>
<div class="overall">
<h1>Notice Board For All students</h1>
<p>The following Are to be taken in account of by all students and respond accordingly</p>
<?php
$con=mysqli_connect("localhost","root","","studentinfo");
if(!$con)
{
	die('Could not connect: ' . mysqli_connect_error());

}
$query="SELECT * FROM noticeboard";
$result=mysqli_query($con,$query);
$numrows=mysqli_num_rows($result);
if($numrows==0)
{
	echo "No Notices are present as of now on this Notice board. Check back later.";
}

?>

 <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
        <th>Notice Type</th>
        <th>Notice</th>
        <th>Notice Number</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {echo
        	"<tr>
        	<td>{$row['Type']}</td>
        	<td>{$row['Notice']}</td>
        	<td>{$row['NoticeNo']}</td>
        	<tr>\n";

        }
        ?>
        </tbody>
        </table>
        </div>
         <div class="link">
        <a href="home.php">Click here to go back to your Student Dashboard</a>
        </div>
</body>
</html>