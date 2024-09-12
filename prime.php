<?php 
    function isPrime($n){
        if($n == 1 || $n == 0){
            return false;
        }
        for($i =2; $i <= sqrt($n);$i++){
            if($n %$i ==0){
                return false;
            }
        }
        return true;
    }
    $n = 100;
    for($i =0;$i<=$n;$i++){
        if(isPrime($i)){
            echo $i." ";
        }
    }
    ?>
     