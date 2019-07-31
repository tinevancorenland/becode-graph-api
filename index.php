<?php

//create array with random numbers looking like 1, random; 2, random; ...

$randomNumbers = [];

for ($i = 0; $i < 10; $i++) {
    $number = rand(0, 10);
    $numberCouples = [$i, $number];
    array_push($randomNumbers, $numberCouples);
}

echo json_encode($randomNumbers);

?>

