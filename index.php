<?php
       include('ColorProfiler.php');
       $ColorProfiler = new ColorProfiler();

       $img = imagecreatefrompng('cow.png');
       //$img = imagecreatefromjpeg('pic_498.jpg');
       //$img = imagecreatefromgif('img.gif');
       //$img = imagecreatefromwbmp('img.bmp');

       //We need to determine image size first and decide whether we need to resize it or not
       //Ff image total size is bigger than 560pxx560px than we are in trouble, computing the array with that size will cause php to freak out
       $colorGroup = $ColorProfiler->freqColorGroups($img);
       echo "<br/>Five most frequent #RGB colors: <br/>" ;
       echo "1. #" . $colorGroup[0] . "<br/>";
       echo "2. #" . $colorGroup[1] . "<br/>";
       echo "3. #" . $colorGroup[2] . "<br/>";
       echo "4. #" . $colorGroup[3] . "<br/>";
       echo "5. #" . $colorGroup[4] . "<br/>";
       
       $palette = $ColorProfiler->createPalette($img);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>test</title>
</head>
<body>

</body>
</html>