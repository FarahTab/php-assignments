<?php 

for($i=1; $i<=10000; $i=$i + 3){
    if($i % 11 == 0){
        echo "11 is a factor of $i"."<br>";
        break;
    }
    else{
        echo "11 is not a factor of $i"."<br>";
    }
}

?>