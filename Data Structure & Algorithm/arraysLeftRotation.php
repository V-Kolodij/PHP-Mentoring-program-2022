<?php

/*
 * Complete the 'rotateLeft' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER d
 *  2. INTEGER_ARRAY arr
 */

//1
function rotateLeft($d, $arr)
{
    $arrCopy = $arr;
    array_splice($arrCopy, 0, $d);
    return array_merge($arrCopy, array_slice($arr, 0, $d));
}

// 2
function rotateLeft($d, $arr)
{
    $subArr = [];
    for ($i = 0; $i < $d; $i++) {
        $subArr[] = array_shift($arr);
    }

    return array_merge($arr, $subArr);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$d = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = rotateLeft($d, $arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
