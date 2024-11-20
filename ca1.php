<?php
    function calculate($base,$exp)
    {
        $result = pow($base,$exp);
        return $result;
    }
    
    $base = 2.3;
    echo "Base Number = $base <br>";
    $exp = 4.5;
    echo "exponent = $exp <br>";
    echo "$base ^ $exp = " .calculate($base,$exp);
    echo "<br>";
?>

<?php
    function c($string){
        $copystr = '';
        for($i=0;$i<strlen($string);$i++){
            $copystr .= $string[$i];
        }
        return $copystr;
    }
    $string = "Hello fellow programmer";
    echo "Original String = $string <br>";
    echo "Copied String = ". c($string);
?>