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