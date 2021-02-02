<?php 
function areaCal($length=null, $width=null, $type='r'){
    if($type=='r'){
        $area=$length * $width;
        echo "area of rectangle= $area";
    }
    
    else if($type=='s'){
        $area=$length * $length;
        echo "area of square= $area";
    }
    
    else if($type=='c'){
        $area=3.1416 * $length * $length;
        echo "area of circle= $area";
    }
    
    else{
        echo "invalid choice";
    }
    
}

areaCal(12, 13, 'c');
echo "<br>";
areaCal(12, 13, 'r');


?>