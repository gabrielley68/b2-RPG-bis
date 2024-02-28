<?php

function importFile($filePath){
    require __DIR__ . '/' . $filePath;
}

function filterArray($elements, $key, $value){
    $filteredElements = [];

    if($value){
        foreach($elements as $element){
            if(str_contains(strtolower($element[$key]), strtolower($value))){
                $filteredElements[] = $element;
            }
        }
    } else {
        $filteredElements = $elements;
    }

    return $filteredElements;
}