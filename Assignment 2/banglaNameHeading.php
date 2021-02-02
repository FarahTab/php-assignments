<?php 
function headingText($text, $color){
 $text_color='';
    switch($color){
            case 'lal' :
            $text_color= 'red';
            break;
            
            case 'nil' :
            $text_color= 'blue';
            break;
            
            case 'shobuj' :
            $text_color= 'green';
            break;
            
            case 'golapi' :
            $text_color= 'pink';
            break;
            
            case 'komola' :
            $text_color= 'orange';
            break;
            
            case 'holud' :
            $text_color= 'yellow';
            break;
    }
    
    echo "<h1 style='color:".$text_color .";'>$text</h1>";
}

headingText("tabira", 'nil');
?>