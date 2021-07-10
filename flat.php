<?php
function flattenArray(array $array, array &$flatten= []): array {
    foreach ($array as $item){
        if (is_array($item)){
            flattenArray($item, $flatten);
        } else{
            $flatten[] = $item;
        }
    }
    return $flatten;
}

$array = [1, 2, [3, 4], 5, [6, [7, 8, 9], 0]];
$newArray = flattenArray($array);

print_r($newArray);
