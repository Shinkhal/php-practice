<?php
function solveQuad($a $b, $c){
    $disc = $b **2 -4*$a*$c;
    if($disc >0){
        $sol1 = (-$b + sqrt($disc))/(2*$a);
        $sol2 = (-$b - sqrt($disc))/(2*$a);
        return [$sol1, $sol2];
    }
    else if(z$disc == 0){
        $sol = - $b / (2*$a);
        return [$sol];
    }
    else{
        
    }
}