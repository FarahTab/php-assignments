<?php 

function borohat($text){
    echo "<span style= \"text-transform:uppercase;\">".$text."</span>";
}


function chotohat($text){
    echo "<span style= \"text-transform:lowercase;\">".$text."</span>";
}

function both($text, $type){
    if($type=='s'){
     echo "<span style= \"text-transform:lowercase;\">".$text."</span>";   
    }
    else if($type=='c'){
        echo "<span style= \"text-transform:uppercase;\">".$text."</span>";
    }
    else{
        echo "invalid choice";
    }
}

borohat("my name is tabira");

echo "<br>";

chotohat("my name is tabira");

echo "<br>";

both("my sister's name is samama", 'c');

echo "<br>";

both("my sister's name is samama", 's');
?>