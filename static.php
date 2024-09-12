<!-- <?php
    function static_var(){
        static $num1 =2;
        $num2 = 5;
        $num1++;
        $num2++;
        echo "Static variable: $num1 <br>";
        echo "Non-static variable: $num2 <br>";
    }
    static_var();
    static_var();
?> -->

<?php
function TV($string){
    echo "My fav tv show is ".$string;
    b();
}
function b(){
    echo "I am here to spoil the code";
}
b();
TV("Spider-Man");
?>