<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Home!!</title>
</head>
<body background="http://www.wolaver.org/Space/seahorse.jpg">
<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<style type="text/css">
	p{
		border:2px solid green;
		background-color: #0B0EB7;
		color: white;
		font-size: 130%;
		text-align: center;

	}
	a{
		border:1px solid red;
		background-color: #0BB7B4;
		color: #ABC13D;
		font-size: 120%;
	}

</style>
<marquee behavior="scroll" bgcolor="#0BB79D" direction="right" loop="100" scrolldelay="20">Welcome Home to Your Dashboard</marquee>
<br><br>
<p id="intro">You are logged in as a student</p>
<a href="bulletintablestudent.php">Click here to view the noticeboard</a>
<br>
<br>
<a href="loginpage.html">Logout of your account</a>


</body>
</html>