<?php 
function currency($BDT){
    $USD= $BDT * 0.0118;
    $CAD= $BDT * 0.015;
    $GBP= $BDT * 0.0086;
    
    echo "the value of $BDT tk is $USD USD, $CAD CAD and $GBP GBP";
}
currency(100);
echo "<br>";
currency(10000);

?>