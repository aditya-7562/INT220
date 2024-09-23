<?php

// Initialize arrays
$array1 = [1, 2, 3, 4, 5];
$array2 = ['apple', 'banana', 'cherry'];
$array3 = ['first' => 'apple', 'second' => 'banana', 'third' => 'cherry'];

// count() - Returns the number of elements in an array
echo "Count of elements in array1: " . count($array1) . "\n";
echo "<br>";

// array_push() - Adds one or more elements to the end of an array
array_push($array2, 'date', 'fig');
print_r($array2);
echo "<br>";

// array_unshift() - Adds one or more elements to the beginning of an array
array_unshift($array2, 'avocado', 'blueberry');
print_r($array2);
echo "<br>";

// array_pop() - Removes the last element of an array
$removedElement = array_pop($array2);
echo "Removed element: " . $removedElement . "\n";
print_r($array2);
echo "<br>";

// array_shift() - Removes the first element of an array
$removedFirstElement = array_shift($array2);
echo "Removed first element: " . $removedFirstElement . "\n";
print_r($array2);
echo "<br>";

// array_search() - Searches for a value in an array and returns its key if found
$searchIndex = array_search('banana', $array2);
echo "Index of 'banana': " . $searchIndex . "\n";
echo "<br>";

// array_count_values() - Counts all the values of an array
$valueCount = array_count_values($array2);
print_r($valueCount);
echo "<br>";

// array_merge() - Merges one or more arrays into one
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
echo "<br>";

// array_combine() - Creates an array by using one array for keys and another for its values
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$combinedArray = array_combine($keys, $values);
print_r($combinedArray);
echo "<br>";

// array_chunk() - Splits an array into chunks
$chunkedArray = array_chunk($array1, 2);
print_r($chunkedArray);
echo "<br>";

// array_diff() - Computes the difference of arrays
$arrayDiff = array_diff($array1, [1, 2]);
print_r($arrayDiff);
echo "<br>";

// array_flip() - Exchanges all keys with their associated values in an array
$flippedArray = array_flip($array3);
print_r($flippedArray);
echo "<br>";

// array_intersect() - Computes the intersection of arrays
$arrayIntersect = array_intersect($array1, [1, 2, 3]);
print_r($arrayIntersect);
echo "<br>";

// array_reverse() - Returns an array with elements in reverse order
$reversedArray = array_reverse($array1);
print_r($reversedArray);
echo "<br>";

// array_slice() - Extracts a slice of the array
$slicedArray = array_slice($array1, 1, 3);
print_r($slicedArray);
echo "<br>";

// array_column() - Returns the values from a single column in the input array
$records = [
    ['id' => 1, 'name' => 'John'],
    ['id' => 2, 'name' => 'Jane'],
    ['id' => 3, 'name' => 'Doe']
];
$names = array_column($records, 'name');
print_r($names);
echo "<br>";

// array_sum() - Returns the sum of all values in an array
$sum = array_sum($array1);
echo "Sum of array1: " . $sum . "\n";
echo "<br>";

// array_product() - Returns the product of all values in an array
$product = array_product($array1);
echo "Product of array1: " . $product . "\n";
echo "<br>";

// in_array() - Checks if a value exists in an array
$isInArray = in_array('banana', $array2);
echo "'banana' is in array2: " . ($isInArray ? 'true' : 'false') . "\n";
echo "<br>";

// array_key_exists() - Checks if a key exists in an array
$keyExists = array_key_exists('second', $array3);
echo "Key 'second' exists in array3: " . ($keyExists ? 'true' : 'false') . "\n";