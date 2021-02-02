<?php

function reverse(){
    $string="test";
    $rev="";
    $i=0;
    while(!empty($string[$i])){
        $rev=$string[$i].$rev;
        $i++;
    }
    echo $rev;
}
reverse();