<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$xyz = array("123",456,20.5);
$z = array_chunk($xyz, 2);
print_r($z);
?>
</body>
</html>