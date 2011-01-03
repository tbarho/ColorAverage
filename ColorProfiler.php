<?php
//This class is to calculate the top 3 color of an input image
class ColorProfiler{

       function __construct() {
       }
       
       function __destruct() {
       }
       
       function checkImgSize($img) {
           $width = imagesx($img);
           $height = imagesy($img);
       }
       
       function freqColorGroups($img) {
           $width = imagesx($img);
           $height = imagesy($img);
           $totalPixels = $width * $height;
           echo "Image Width: "  . $width . "<br/>";
           echo "Image Height: " . $height . "<br/>";
           echo "Image Total Pixels: " . $totalPixels . "<br/>";
           
           

           // Itr through the image file, convert pix values from dec to hex, and store them in a 1D array
           $i = 0;
           for($y = 0; $y < $height; $y++) {
               for($x = 0; $x < $width; $x++) {
                   $rgbDec = imagecolorat($img, $x, $y);
                   $r = $rgbDec >> 16 & 255;
                   $g = $rgbDec >> 8 & 255;
                   $b = $rgbDec & 255;

                   $r = dechex ($r);
                   $g = dechex ($g);
                   $b = dechex ($b);

                   if(strlen($r) < 2) { $r = 0 . $r; }
                   if(strlen($g) < 2) { $g = 0 . $g; }
                   if(strlen($b) < 2) { $b = 0 . $b; }

                   $rgbHex[$i] = $r . $g . $b;
                   $i++;
               }
               //echo "total count is:" . count($rgbHex);
           }
           
           //returns an array using the values of the input array as keys and their frequency in input as values.
           $groups = array_count_values($rgbHex);

           //sort group in decending order
           arsort($groups);

           //print them out just to see
           echo "<br/>.-----------------.<br/>";
           print_r($groups);
           echo "<br/>.-----------------.<br/>";

           $groupKeys = array_keys($groups);

		   // check for ties
		   // if($groupValues[0] == $groupValues[1]) {return null;}

           //get most frequent groups
           $colorGroup1 = $groupKeys[0];
           $colorGroup2 = $groupKeys[1];
           $colorGroup3 = $groupKeys[2];
           $colorGroup4 = $groupKeys[3];
           $colorGroup5 = $groupKeys[4];

           return array($colorGroup1,$colorGroup2,$colorGroup3,$colorGroup4,$colorGroup5);
           
       }
       
       function createPalette($img) {
       		$average = new Imagick($img);
       }
}









