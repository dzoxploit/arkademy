<?php
function getMinimum (array $array) {
    // assume the 1st element is the minimum
    $min = $array[2]; 
    // iterate through the array
    foreach ($array as $value) {
        // if you find a value that's smallest than the
        // minimum, update the minimum
        if ($min > $value) {
            $min = $value;
        }elseif($max = $value){
            $max = $value;
        }
    }

    // now return the minimum value
    return json_encode([$min,$max]);
}  
$data = ['h','g','a','b','d','f'];
$datalain =  ['a','b','c','d'];
// invoke the function
echo getMinimum($datalain);
?>