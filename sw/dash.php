<?php
session_start();
?>
<html>
	<head>
		<title>Semantic Web</title>
	</head>
	<body background="img/17.jpg">
		<center>
			<h1>
				Welcome to Dashboard!
				<br>
				<hr>
			</h1>
		</center>
<?php
echo 'You are logged in now<br>';
echo "Hi, ".$_SESSION['id'];
?>

	<form>
	<br>
	Search:&nbsp&nbsp<input type="search" value="keywords here.."><br><br> 
	<input type="submit" value="Search">
	</form>
	<br><br><br>
	<a href="logout.php">Logout!</a>
	</body>
</html>
