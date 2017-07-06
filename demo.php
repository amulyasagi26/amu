<!DOCTYPE html>
<html>
<head>
	<title>the testing phase</title>
</head>
<body>
<form action="Demo.php" method="post">
	<input type="textarea" name="t1" value=""/>
	<input type="submit" name="button" value="ok"/>
</form>

</body>
</html>

<?php
echo 'I know how to run a PHP Program in XAMPP! <br />';
echo "<html>
		I know how to run a PHP Program in XAMPP!
	</html>";
	
	if(!isset($_REQUEST["t1"]))
	{
		echo "enter any value";
	}
	else
	{
		$v=$_REQUEST["t1"];
		echo $v;
	}

	
	//$r = $_REQUEST['hi'];

?>
	



