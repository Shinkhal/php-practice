<!-- <?php
    $result = array(
        array("Shinkhal",8.5,"pass"),
        array("Suraj",7.1,"pass"),
        array("Anurag",4.7,"fail")
    );
    echo $result[0][0]. "--CGPA is ".$result[0][1]. " and his status is ".$result[0][2]. "<br>";
    echo $result[1][0]. "--CGPA is ".$result[1][1]. " and his status is ".$result[1][2]. "<br>";
    echo $result[2][0]. "--CGPA is ".$result[2][1]. " and his status is ".$result[2][2]. "<br>";
?> -->
<?php
function multiply(&$mat1, &$mat2, &$res) {
    $n = 2;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $res[$i][$j] = 0;
            for ($k = 0; $k < $n; $k++) {
                $res[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j];
            }
        }
    }
}

$mat1 = [
    [1, 2],
    [3, 4],
];

$mat2 = [
    [5, 6],
    [7, 8],
];

$res = array_fill(0, 2, array_fill(0, 2, 0));

multiply($mat1, $mat2, $res);

echo "Matrix 1:\n";
foreach ($mat1 as $row) {
    echo implode(" ", $row) . "\n";
}

echo "\nMatrix 2:\n";
foreach ($mat2 as $row) {
    echo implode(" ", $row) . "\n";
}

echo "\nResult:\n";
foreach ($res as $row) {
    echo implode(" ", $row) . "\n";
}
?>  

<?php
$mulArrr = array(array(1,2),
                 array(5,6)
                );

$rowsA = count($mulArrr);
$colsA = count($mulArrr[0]);

$result = array();
for($i = 0; $i < $rowsA; $i++) {
    for($j = 0; $j < $colsA; $j++) {
        $result[$i][$j] = 0;
        for($k = 0; $k < $colsA; $k++) {
            $result[$i][$j] += $mulArrr[$i][$k] * $mulArrr[$k][$j];
        }
    }
}

for($i = 0; $i < count($result); $i++){
    for($j = 0; $j < count($result[$i]); $j++){
        echo $result[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>