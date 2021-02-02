<?php 

function oldYoung(int $age){
    if($age>= 0 && $age<=13){
        echo "you are a child";
    }
    else if($age>= 13 && $age<= 19){
        echo "you are a teenager";
    }
    else if ($age>=19 && $age<=30){
        echo "you are a young adult";
    }
     else if ($age>=30 && $age<=40){
        echo "you are an adult";
    }
    else if ($age>=40 && $age<=60){
        echo "you are middle aged";
    }
    else if ($age>=60 && $age<=120){
        echo "you are a senior citizen";
    }
    else{
        echo "invalid age";
    }
}

oldYoung(13);
echo "<br>";
oldYoung(42);

?>