<?php
$dirname = "images/";
$images = glob($dirname."*.png");
//
//foreach($images as $image)
//{
//    echo '<img src="' .$image. '">';
//}
for($i=0;$i<6;$i++)
{
    $random[$i] = array($images[rand(1,34)]);
}

$random = array_merge($random,$random);
shuffle($random);

//for($i=0;$i<count($random);$i++)
//{
//    echo '<img src="' .$random[$i][0]. '">';
//}
//foreach($random as $image)
//{
//    echo '<img src="' .$image. '">';
//}
//

?>