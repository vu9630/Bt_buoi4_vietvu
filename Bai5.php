<?php
$input = argv[1];

function bai2( $input ){
   
    echo substr('$input', 0 , 4)  . "\n";   
}




function printStarts() {
    for($i=1; $i<20; $i++){
        echo "*";
    }
    echo "*" . "\n";
}

printStarts();
bai2($input);
printStarts();
?>