<?php
session_start();
session_unset();
echo 'Loggin out..';
header("refresh:3;url=index.php");
?>
