<?php

function calculate_average_temperature($temperatures) {
    $sum = array_sum($temperatures);
    $count = count($temperatures);
    $average = $sum / $count;
    return round($average, 2);
}

function find_lowest_temperature($temperatures) {
    sort($temperatures);
    return $temperatures[0];
}

function find_highest_temperature($temperatures) {
    rsort($temperatures);
    return $temperatures[0];
}

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average_temperature = calculate_average_temperature($temperatures);
$lowest_temperature = find_lowest_temperature($temperatures);
$highest_temperature = find_highest_temperature($temperatures);

echo "Average temperature: " . $average_temperature . " F\n";
echo "Lowest temperature: " . $lowest_temperature . " F\n";
echo "Highest temperature: " . $highest_temperature . " F\n";


// Define the initial array
$initial_array = array(
    "Sarajevo" => 71000,
    "Mostar" => 88000,
    "Tuzla" => 75000,
    "Zenica" => 72000
);

// Perform the necessary operations to transform the array
$initial_array["Sarajevo"] = "capital";
unset($initial_array["Zenica"]);
$initial_array["Banja Luka"] = 78000;

// Display the target array
var_dump($initial_array);


function uppercase_array_values($array) {
    $uppercase_array = array();
    foreach ($array as $key => $value) {
        $uppercase_array[$key] = strtoupper($value);
    }
    return $uppercase_array;
}

// Define the initial array
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

// Call the function to convert the array values to uppercase
$uppercase_color = uppercase_array_values($color);

// Display the resulting uppercase array
var_dump($uppercase_color);

?>