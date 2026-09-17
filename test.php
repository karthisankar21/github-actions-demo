<?php

require 'calculator.php';

if (add(10, 5) !== 15) {
    echo "Addition test failed\n";
    exit(1);
}

if (subtract(10, 5) !== 5) {
    echo "Subtraction test failed\n";
    exit(1);
}

if (multiply(10, 7) !== 50) {
    echo "Multiplication test failed";
    exit(1);
}

echo "All tests passed\n";
