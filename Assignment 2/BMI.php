<?php 
function BMI($mass, $height){
    $bodyMassIndex= $mass/ ($height * $height);
        echo "the body mass index is $bodyMassIndex";
}

BMI(50, 5.2);
?>