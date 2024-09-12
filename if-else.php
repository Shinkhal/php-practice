<?php
$marks = 69;
if($marks <33){
    echo "fail";
}
else if($marks >33 && $marks <=50){
    echo "D grade";
}
else if($marks >50 && $marks<=60){
    echo "c grade";
}
else if($marks >60 && $marks<80){
    echo "B grade";
}
else if($marks >=80 && $marks<90){
    echo "A grade";
}
else{
    echo "Invalid input";
}