<?php
    function isArmstrong($num){
        $sum =0;
        $temp = $num;
        while ($temp !=0){
            $digit = $temp %10;
            $sum = $sum + pow($digit, strlen($num));
            $temp = (int)($temp/10);

        }
        return $sum == $num;

    }
    $x = isArmstrong(153);
    if($x){
        echo "Is an Armstrong Number";
    }else{
        echo "Not a armstrong number";
    }
?>