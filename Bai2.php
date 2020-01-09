<?php

$string = $argv[1];


function bai2( $string ){
    echo "chuoi co so tu:";
    
    echo str_word_count($string)  . "\n";   
}




function printStarts() {
    for($i=1; $i<20; $i++){
        echo "*";
    }
    echo "*" . "\n";
}

printStarts();
bai2($string);
printStarts();
?>