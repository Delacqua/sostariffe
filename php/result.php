<?php 

include_once "FlatArray.php";

$array1 = [[1, 2, [3]], 4];

print_r(FlatArray::convertArray($array1));