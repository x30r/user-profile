<!-- include_once('function/databaseFunctions.php'); -->
<html>
	<head>
		<title>Semantic Web</title>
	</head>
	<body background="img/17.jpg">
		<center>
			<h1>
				Welcome to Web Profile!
				<br>
				<hr>
			</h1>
		</center>
		<p>Hello, here is where we are creating user profiles and buiding user profiles so it is mendatory to fillup the form.</p>
		<b>
			Please fillup the form given below:
		</b>
		<form action="register.php" method="POST">
		<table border="0">
		<tr>
			<td>Name:</td>&nbsp;&nbsp;&nbsp;<td><input type="text" name="name"><br></td>
		</tr>
		<tr>
			<td>Email:</td>&nbsp;&nbsp;&nbsp;<td><input type="text" name="email"><br></td>
		</tr>
		<tr>
			<td>Password:</td>&nbsp;&nbsp;&nbsp;<td><input type="password" name="pass"><br></td>
		</tr>
		<tr>
			<td>Interest:</td>&nbsp;&nbsp;&nbsp;<td><input type="text" name="interest"><br></td>
		</tr>
			<td>Comment:</td>&nbsp;&nbsp;&nbsp;<td><input type="text" name="comment"><br></td>
		</tr>
		<tr>
		<td><br></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="Submit" value="Submit"></center></td>
		</tr>
	</table>
	</form>
	<h1>Already a member??</h1>
	<h2><a href="login.php">Login</a></h2>
	</body>
</html>
