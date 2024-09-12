<?php
    function multiply(&$mat1,&$mat2,&$res){
        $n =4;
        for ($i = 0; $i < $n; $i++){
            for ($j = 0; $j < $n; $j++){
                $res[$i][$j] = 0;
                for ($k = 0; $k < $n; $k++){
                    $res[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j];
                }
            }
        }
    }
    $mat1 = array(array(1,1,2,2),array(2,2,4,4),array(3,3,4,4),array(4,4,2,2));
    $mat2 = array(array(1,1,2,2),array(2,2,4,4),array(3,3,4,4),array(4,4,2,2));
    multiply($mat1,$mat2,$res);
    $n =4;
    echo ("Result matrix is : <br>");
    for ($i = 0; $i < $n; $i++){
        for ($j = 0; $j < $n; $j++){
            echo ($res[$i][$j]);
            echo " ";
        }
        echo "<br>";
        
    }
?>