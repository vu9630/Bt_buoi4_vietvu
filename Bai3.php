<?php

$create =$argv[1];

function wordStart($create){
    
    echo  strcmp($create);         
}



function printStarts() {
    for($i=1; $i<20; $i++){
        echo "*";
    }
    echo "*" . "\n";
}

printStarts();
wordStart($create);

printStarts();


?>