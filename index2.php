<?php
	include('ColorAverage.php');
	
	$img = 'ups.png';
	
	echo '<img src="' . $img . '" style="float: left;" />';
	
	$img = imagecreatefrompng($img);
	
	$average = new ColorAverage();
	
	$palette = $average->analyzeImageColors($img,3,3);
	
	/*
echo '<pre>';
	echo print_r($palette);
	echo '</pre>';
*/
	echo $palette;
	
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Sample Title</title>
</head>

<body>
</body>
</html>
