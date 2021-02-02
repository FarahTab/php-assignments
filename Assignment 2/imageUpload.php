<?php 
function image($imgName, $width, $height){
    echo '<img src= "'.$imgName.'"width="'.$width.'"$height="'.$height.'"></img>';
}
image('download.jfif', 100, 200);
echo "<br>";
echo "<br>";
image('https___specials-images.forbesimg.com_dam_imageserve_1137991385_0x0.jpg_fit=scale', 200, 400);
?>