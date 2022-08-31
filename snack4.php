<?php 
$numbers = [];

while (count($numbers) < 15) {
    $new_number = rand(1, 100);
    if (!in_array($new_number, $numbers)) {
        $nmumbers[] = $new_number;
    };
};
var_dump($numbers);

?>