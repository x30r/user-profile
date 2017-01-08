<?php
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['pass']) || isset($_POST['interest']) || isset($_POST['comment']))
{
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			echo 'The email address entered does not appear to be a valid email. If it is a valid email address, please contact our administrator';
		}
        	else//everything should be ok if we make it to here
        	{
			$name = $_POST['name'];
			$password = $_POST['pass'];
			$mail = $_POST['email'];
        		$interest = $_POST['interest'];
        		$comments = $_POST['comment'];
			$con = mysql_connect("localhost","root","");
			mysql_select_db("sw",$con) or die(mysql_error());
			$query = "SELECT * FROM user WHERE email = '$mail'";
			$result = mysql_query($query,$con);
			if($result)
			{
				$numRows = mysql_fetch_array($result);
				if($numRows > 0)
				{
					echo 'Sorry, an account already exits with this email address. Please try again';
					header("refresh:3;url=index.php");
				}
                        	else
				{
                            		$query = "INSERT INTO user (id, name, email, password, interest, comments) VALUES('$name','$mail','$password','$interest', '$comments')";
                            		$result = mysql_query($query,$con);
                            		if($result)
                            		{                      
					echo 'Congradulations! You have successfully registered, please login to enjoy our features'."<br>";
                            		echo $_POST['name']."<br>";
                            		echo $_POST['pass']."<br>";
                            		echo $_POST['email']."<br>";
                            		echo $_POST['interest']."<br>";
                            		echo $_POST['comment']."<br>";
					header("refresh:5;url=login.php");
                            		}
                            		else
                            		{
                               			echo 'Insert query problem db error..';
                            		}                                                      
                        	}
			}
			else
			{
				echo 'Email Already exist db error..';
			}
		}
	}
	else
	{
		mysql_close($db);
		echo 'There was a problem connecting to the database. Please contact the administrator if problem persists';
        }
?>
