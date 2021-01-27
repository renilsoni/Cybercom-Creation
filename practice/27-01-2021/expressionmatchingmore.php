<?php

function hasSpace($string){
    if(preg_match('/ /',$string)){
        return true;
    }
    else{
        return false;
    }
}

$string = 'my name is renil soni';

if(hasSpace(($string))){
    echo 'Has Atleast One Space';
}
else{
    echo 'Has No Space';
}


?>