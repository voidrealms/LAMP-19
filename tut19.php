<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

//For loop
for ($i=1; $i <= 5; $i++)
{
	echo $i . "<br>";
}

//For each
$myarray = array("one", "two", "three", "four");

foreach($myarray as $var)
{
	echo $var . "<br>";
}

?>

</body>
</html>
