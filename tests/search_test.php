<?php

require __DIR__ . '/../src/binary_search.php';
require __DIR__ . '/../src/error_binary_search.php';

function assertEqual($expected, $actual, $description) {
    if ($expected !== $actual) {
        echo "❌ $description. Expected: $expected, got: $actual\n";
        exit(1);
    }
}

function testCorrectBinarySearch() {
    echo "🔍 Testing correct binarySearch()...\n";
    $array = [1, 3, 5, 7, 9, 11, 13, 15];

    $tests = [
        [7, 3],
        [1, 0],
        [15, 7],
        [9, 4],
        [2, -1],
        [20, -1],
        [0, -1],
    ];

    foreach ($tests as [$target, $expected]) {
        $actual = binarySearch($array, $target);
        assertEqual($expected, $actual, "binarySearch($target)");
    }

    echo "✅ Correct binarySearch() passed all tests!\n\n";
}

function testIncorrectBinarySearch() {
    echo "🔍 Testing IncorrectBinarySearch()...\n";
    $array = [1, 3, 5, 7, 9, 11, 13, 15];

    $failingTargets = [13, 11, 15, 9];
    foreach ($failingTargets as $target) {
        $actual = IncorrectBinarySearch($array, $target);
        if ($actual === array_search($target, $array)) {
            echo "❌ IncorrectBinarySearch($target) returned correct index $actual, but it should fail.\n";
            exit(1);
        }
    }

    echo "✅ IncorrectBinarySearch() fails as expected on right-half values.\n\n";
}

testCorrectBinarySearch();
testIncorrectBinarySearch();
echo "✅ All tests completed successfully!\n";
