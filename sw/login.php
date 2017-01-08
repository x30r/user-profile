<?php
session_start();
if(null !== $_SESSION['id'])
{
	echo "You are already loged in.. :P";
	header("refresh:3;url=dash.php");
}
else
{
?>
<html>
	<head>
		<title>Semantic Web</title>
	</head>
	<body background="img/17.jpg">
	<center>
		<h1>
			Login
			<br>
			<hr>
		</h1>
	<form action="proc.php" method="POST">
		Username:<input type="text" name="username"><br>
		Password:<input type="password" name="pass"><br>
		<input type="submit" value="Login">
	</form>
	</center>
</body>
</html>
<?php
}
?>
