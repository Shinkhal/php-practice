<?php
function solveQuad($a, $b, $c) {
    if ($a == 0) {
        return "Invalid: 'a' must not be zero for a quadratic equation.";
    }

    $disc = $b ** 2 - 4 * $a * $c; 

    if ($disc > 0) {
        // Two distinct real roots
        $sol1 = (-$b + sqrt($disc)) / (2 * $a);
        $sol2 = (-$b - sqrt($disc)) / (2 * $a);
        return [$sol1, $sol2];
    } else if ($disc == 0) {
        // One real root (double root)
        $sol = -$b / (2 * $a);
        return [$sol];
    } else {
        // Complex roots
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(abs($disc)) / (2 * $a);
        return [
            $realPart . " + " . $imaginaryPart . "i", 
            $realPart . " - " . $imaginaryPart . "i"
        ];
    }
}

// Test the function
print_r(solveQuad(1, -3, 2));  // Two distinct real roots
print_r(solveQuad(1, 2, 1));   // One real root
print_r(solveQuad(1, 2, 5));   // Complex roots
