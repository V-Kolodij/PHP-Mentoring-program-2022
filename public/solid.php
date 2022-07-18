<?php

//https://www.codewars.com/kata/585eaef9851516fcae00004d/php
function what_list_am_i_on(array $actions): string {
    $STRING_MAP = [
        'naughty' => ['b', 'f', 'k'],
        'nice' => ['g', 's', 'n']
    ];
    $naughty = $nice = 0;
    for ($i = 0; $i<count($actions); $i++){
        $start = $actions[$i][0];
        if(in_array($start, $STRING_MAP['naughty'])){
            $naughty++;
        } elseif (in_array($start, $STRING_MAP['nice'])){
            $nice++;
        }

    }
    return $naughty >= $nice ? 'naughty' : 'nice';
}


https://www.codewars.com/kata/57e8f757085f7c7d6300009a/php
function planeSeat($a){

    $num = (integer)$a;
    $letter = substr($a, -1, 1);

    if(!$num || !$letter || !validateData($num, $letter)){
        return "No Seat!!";
    }

    return getNumPosition($num) . "-" . getLetterPos($letter);
}

function getNumPosition($num){
    switch(true){
        case $num <= 20:
            $position = 'Front';
            break;
        case $num <= 40:
            $position = 'Middle';
            break;
        case $num <= 60:
            $position = 'Back';
            break;
    }
    return $position;
}

function getLetterPos($letter){
    $letterNum = ord($letter);
    switch(true){
        case $letterNum >= ord('G') && $letterNum <= ord('K'):
            $position = 'Right';
            break;
        case $letterNum >= ord('D') && $letterNum <= ord('F'):
            $position = 'Middle';
            break;
        case $letterNum >= ord('A') && $letterNum <= ord('C'):
            $position = 'Left';
            break;
    }
    return $position;

}

function validateData($number, $let) {
    if($number > 60 || in_array($let, ['I', 'J']) || ord($let) > ord('K')){
        return false;
    }
    return true;
}
