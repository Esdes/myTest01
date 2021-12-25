<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post">
	<input type="text" name="revStr">
	<input type="submit" name="submit">
	<a href="\"><input type="button" name="back" value="Назад"></input></a>
</form>
</body>
</html>


<?php

if($_POST['submit']){
	$revStr = strrev($_POST['revStr']);
	echo $revStr;
}