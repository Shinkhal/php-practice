<?php
    $var = 19;
    var_dump(filter_var($var,FILTER_VALIDATE_INT));
    $options = array("options" => array("min_range" =>20, "max_range" =>30));
    if(filter_var($var,FILTER_VALIDATE_INT,$options))
    {
        echo "varibale is a integer";
    }
    else{
        echo "variable is not a integer";
    }
?>