<?php

$myfile = __DIR__."/image.png";
$newsize = [200 , 100];
header('Content-Type: image/png');
$oldsize = getimagesize($myfile);

$newbanner = imagecreatetruecolor($newsize[0],$newsize[1]);
$oldimage = imagecreatefrompng($myfile);

imagecopyresized($newbanner,$oldimage,0,0,0,0,$newsize[0],$newsize[1],$oldsize[0],$oldsize[1]);

imagepng($newbanner);
?>
