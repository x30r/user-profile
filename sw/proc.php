<?php
session_start();
if(null !== $_POST['username'] && null !== $_POST['pass'])
{
if(!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL))
{
		echo 'The email address entered does not appear to be a valid email.';
}
else
{
	$mail = $_POST['username'];
	$pass = $_POST['pass'];
	$con = mysql_connect("localhost","root","");
	mysql_select_db("sw",$con) or die(mysql_error());
	$query = "SELECT * FROM user WHERE email = '$mail' AND password = '$pass'";
	$result = mysql_query($query,$con);
	if($result)
	{
		$numRows = mysql_fetch_array($result);
		if($numRows > 0)
		{
			echo 'Loged in!! You will be redirected in 4 seconds....';
			$_SESSION['id'] = $mail;
			header("refresh:3;url=dash.php");				
		}
                      	else
		{
			echo 'Wrong Creds..';
			header("refresh:3;url=index.php");				
		}
	}
	else
	{
		echo 'Query didn\'t submitted..';
	}
}
}
else
{
echo 'Missing something';
header("refresh:3;url=login.php");
}
?>
