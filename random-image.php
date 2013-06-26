<?php 

$image[0] = array("/wp-content/themes/bentley-photographics/images/one.jpg", "Flinders Ranges");
$image[1] = array("/wp-content/themes/bentley-photographics/images/two.jpg", "Single Tree in Snow - Seirra Montana");
$image[2] = array("/wp-content/themes/bentley-photographics/images/three.jpg", "Paris 6am");
$image[3] = array("/wp-content/themes/bentley-photographics/images/four.jpg", "Antelope Canyon");

shuffle($image);
echo $image[1][1];
echo('<img src="' . $image[1][0] . '" alt="' . $image[1][1] . '" title="' . $image[1][1] . '" />');

?>