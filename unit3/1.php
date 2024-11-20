<?php
    $var = 99.5;
    var_dump(filter_var($var,FILTER_VALIDATE_INT));
    if(filter_var($var,FILTER_VALIDATE_INT))
    {
        echo "<br> Variable is a Integer";
    }
    else {
        echo "<br> $var is not a Integer";
    }
?>