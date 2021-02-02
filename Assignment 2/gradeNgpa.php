<?php 

function getResult($marks){
    if($marks>=0 && $marks<=50){
        $grade='F';
        $GPA=0;
    }
    else if($marks>50 && $marks<=60){
        $grade='D';
        $GPA=1;
    }
    else if($marks>60 && $marks<=70){
        $grade='C';
        $GPA=2;
    }
    else if($marks>70 && $marks<=75){
        $grade='B';
        $GPA=3;
    }
    else if($marks>75 && $marks<=80){
        $grade='A-';
        $GPA=4;
    }
    else if($marks>80 && $marks<=90){
        $grade='A';
        $GPA=5;
    }
    else if($marks>90 && $marks<=100){
        $grade='A+';
        $GPA='golden GPA';
    }
    else{
        $grade='invalid';
        $GPA='invalid';
    }
    
    echo "Grade=$grade and GPA=$GPA";
}

getResult(91);
echo "<br>";
getResult(86);

?>