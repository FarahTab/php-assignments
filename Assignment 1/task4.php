<?php 
$mark = 90;
$name= "tabira";
$rel = "";

if ($name=="aditi" || $name=="tabira" || $name== "ruma" || $name=="tarannum")
{
    $rel= "apu";
}
    else{
        $rel="vaiya";
    }
    

if ($mark >=50){
    echo "$name $rel you have passed in the exam";
}
else{
    echo "$name $rel you have failed in the exam";
}
?>