<?php

function language_list(...$languages)
{
   
    return $languages;
}

function add_to_language_list($arr, $newitem) {
    $arr[] = $newitem;
    return $arr;
}

function prune_language_list ($array) {
    array_shift($array);
    return $array;
}

function current_language($arr) {
    return $arr[0];
}

function language_list_length($arr) {
    return count($arr);
}