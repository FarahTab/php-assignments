<?php 
function amarHeader($head, $tag, $align, $color){
    echo "<$tag style=\" text-align:$align; color:$color;\">$head</$tag>";
}

amarHeader('our team', 'h1', 'center', 'blue');
echo "<br>";
amarHeader('team members', 'h3', 'left', 'pink');
echo "<br>";
amarHeader('team 1', 'h5', 'right', 'green');
?>