<!-- bin to decimal     -->
<!-- <?php
    function x($binary){
        return bindec($binary);
    }
    $binary = 1011;
    echo "Binary to decimal ". x($binary);
?> -->

<!-- decimal to binary  -->
<!-- <?php
    function z($decimal){
        return decbin($decimal);
    }
    $decimal = 10;
    echo "Decimal to binary ". z($decimal);
?> -->
 
 <?php
$base = 2;
$exponent = 3;
echo "Result: " . pow($base, $exponent);
?>

<?php
function copyString($str) {
    $copied = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $copied .= $str[$i];
    }
    return $copied;
}


$original = "Hello, World!";
echo "Copied String: " . copyString($original) ."<br>";
?>


<?php
function isAlphabet($char) {
    return ctype_alpha($char);
}

$char = 'A';
echo isAlphabet($char) ? "Alphabet" : "Not Alphabet";
?>

<?php
function total($n){
    $sum = 0;
    $i =0;
    while ($i <= $n){
        $sum += $i;
        $i++;
    }
    return $sum;
}
$n =5;
echo "Sum of $n is ". total($n);
?>

<?php
function findMissingNumbers($array) {
    $missing = [];
    for ($i = 1; $i <= max($array); $i++) {
        if (!in_array($i, $array)) {
            $missing[] = $i;
        }
    }
    return $missing;
}

$array = [1, 2, 4, 6];
print_r(findMissingNumbers($array));
?>

<?php
function printNonRepeatedElements($array) {
    $counts = array_count_values($array);
    foreach ($counts as $value => $count) {
        if ($count == 1) {
            echo $value . " ";
        }
    }
}

$array = [1, 2, 2, 3, 4, 4, 5];
printNonRepeatedElements($array);
?>
<!-- matrix multiplication  -->
<?php
function multiplyMatrices($matrix1, $matrix2){
    $res =[];
    for($i =0; $i<count($matrix1);$i++){
        for($j =0; $j < count($matrix2[0]);$j++){
            $res[$i][$j] = 0;
            for($k =0; $k < count($matrix2);$k++){
                $res[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }

        }
    }
    return $res;
}
$matrix1 = [[1, 2, 3], [4, 5,9]];
$matrix2 = array( array(7,8,9),array(4,5,6));
print_r(multiplyMatrices($matrix1,$matrix2));
echo "<br>";
?>

<?php
function invertedHalfPyramid($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*" . " ";
        }
        echo "<br>";
    }
}

$rows = 5;
invertedHalfPyramid($rows);
?>
<?php
function invertedFullPyramid($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        echo str_repeat(' ', $rows - $i);
        echo str_repeat('*', 2 * $i - 1);
        echo "<br>";
    }
}

$rows = 5;
invertedFullPyramid($rows);
?>
<?php
function halfPyramidAlphabets($rows) {
    $alphabet = 'A';
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $alphabet . " ";
        }
        echo "<br>";
        $alphabet++;
    }
}

$rows = 5;
halfPyramidAlphabets($rows);
?>
<?php
function checkVowelOrConsonant($char) {
    $vowels = 'aeiou';
    if (strpos($vowels, strtolower($char)) !== false) {
        return "Vowel";
    } else {
        return "Consonant";
    }
}

$char = 'a';
echo checkVowelOrConsonant($char);
?>
