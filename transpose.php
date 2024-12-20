
<!-- 
<html>
    <body>
        <?php
            $a = array(array(1,2,3),array(4,5,6),array(7,8,9));
            $rows = count($a);
            $cols = count($a[0]);
            $t = array_fill(0, $cols, array_fill(0, $rows,0));
            for ($i = 0; $i < $rows; $i++){
                for ($j = 0; $j < $cols; $j++){
                    $t[$i][$j]= $a[$i][$j];
                }
            }
            print("transpose of given matrix: <br>");
            for ($i = 0; $i < $cols; $i++){
                for ($j = 0; $j < $rows; $j++){
                    print($t[$i][$j]." ");
                }
                print("<br>");
            }
        ?>
    </body>
</html> -->

<?php
function transposeMatrix($matrix) {
    $transposed = [];
    foreach ($matrix as $rowIndex => $row) {
        foreach ($row as $colIndex => $value) {
            $transposed[$colIndex][$rowIndex] = $value;
        }
    }
    return $transposed;
}

// Example usage
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "Original Matrix:<br>";
foreach ($matrix as $row) {
    echo implode(' ', $row) . "<br>";
}

$transposed = transposeMatrix($matrix);

echo "<br>Transposed Matrix:<br>";
foreach ($transposed as $row) {
    echo implode(' ', $row) . "<br>";
}
?>
