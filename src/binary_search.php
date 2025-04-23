<?php

function binarySearch($array, $target):int  {
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($array[$mid] == $target) {
            return $mid; 
        } elseif ($array[$mid] < $target) {
            $low = $mid + 1; 
        } else {
            $high = $mid - 1;
        }
    }

    return -1; 
}
