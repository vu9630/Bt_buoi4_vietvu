<?php
$a = $argv[1];
$b = $argv[2];
$c = $argv[3];


function solve($a, $b, $c){
   
    $delta = pow(4,2) - (4* $a * $c);

    if($delta == 0 ){
        echo "phuong trinh co nghiem kep: x1= x2= (-$b/2*$a)" . "\n" ;
    }
    else if($delta > 0 ){
        echo "phuong trinh co 2 nghiem phan biet : x1=  ((-$b + sqrt($delta)) / 2*$a)" . "\n";
        echo "phuong trinh co 2 nghiem phan biet : x2 = ((-$b - sqrt($delta)) /2*$a)" . "\n";
    }
    else if($delta < 0){
        echo "phuong trinh vo nghiem" ;
    }
}


 function printStarts() {
     for($i=1; $i<20; $i++){
         echo "*";
     }
     echo "*" . "\n";
 }
 printStarts();
 solve($a, $b, $c);
 printStarts();

?>



