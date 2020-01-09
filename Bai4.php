<?php
$a = $argv[1];
$b = $argv[2];

function input($a ,$b ){
   

    echo strpos($a,$b);
}



function printStarts() {
    for($i=1; $i<20; $i++){
        echo "*";
    }
    echo "*" . "\n";
}

printStarts();

input($a ,$b );
printStarts();


?>