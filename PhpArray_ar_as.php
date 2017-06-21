<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "array_rand — 从数组中随机取出一个或多个单元 :" . "\n";
$input = array(1, 2, 3, 4, 5, 6);
$array = array("frist", "second", "three", "four");
$array2 = array("a" => "banana", "b" => "yellow", "c" => "gray", "d" => "blue");
print_r(array_rand($input, 3));
print_r(array_rand($input, 1));
echo "\n";
print_r(array_rand($array, 2));
print_r(array_rand($array, 1));
echo "\n";
print_r(array_rand($array2, 2));
print_r(array_rand($array2, 1));

echo "\n\n";

echo "array_reduce — 用回调函数迭代地将数组简化为单一的值:" . "\n";
function sum($array, $item) {
    $array += $item;
    return $array;
}

function product($array, $item) {
    $array *= $item;
    return $array;
}

$a = array(1, 2, 3, 4, 5);
$x=array();
echo array_reduce($a, "sum")."\n";
echo array_reduce($a, "product",1)."\n";//如果不指定第三个参数，开始值为0，乘积0
echo array_reduce($x, "sum","空数组");

echo "array_replace_recursive — 使用传递的数组递归替换第一个数组的元素:"."\n";
$base = array('citrus' => array("orange"), 'berries' => array("blackberry", "raspberry"),);
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));
print_r(array_replace_recursive($base, $replacements));


echo "array_replace — 使用传递的数组替换第一个数组的元素:"."\n";
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");
print_r(array_replace($base, $replacements,$replacements2));

echo "array_reverse — 返回单元顺序相反的数组 :"."\n";
$input = array("php", 4.0, array("green", "red"));

print_r(array_reverse($input));
print_r(array_reverse($input,TRUE));

echo "array_search — 在数组中搜索给定的值，如果成功则返回首个相应的键名 :"."\n";
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$array2 = array(0 => '2', 1 => '154', 2 => 654, 3 => 63);
echo var_dump(array_search("green",$array));
echo var_dump(array_search("gray",$array));
echo var_dump(array_search(654, $array2));
echo var_dump(array_search("654", $array2));
echo var_dump(array_search("654", $array2, TRUE))."\n\n";

echo "array_shift — 将数组开头的单元移出数组:"."\n";
$stack = array("orange", "banana", "apple", "raspberry");
$stack2 = array("orange"=>"12", "banana"=>"15", "apple"=>"65", "raspberry"=>"32");
echo array_shift($stack)."\n";
echo array_shift($stack2)."\n";

echo "array_slice — 从数组中取出一段:"."\n";
$input = array("a", "b", "c", "d", "e");
print_r(array_slice($input, 1));;
print_r(array_slice($input, 1,3));;
print_r(array_slice($input, -4,3));;
print_r(array_slice($input, 1,-3,TRUE));;
print_r(array_slice($input, -4,-3));;
print_r(array_slice($input, 5));;

echo "array_splice — 去掉数组中的某一部分并用其它值取代 :"."\n";
$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 1));
print_r($input);

echo "---------------------------------------\n";

$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 1, count($input),"org"));
print_r($input);

echo "---------------------------------------\n";

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
print_r($input);

echo "---------------------------------------\n";

$input = array("red", "green", "blue", "yellow");
array_splice($input, 3, 0, "purple");
print_r($input);

echo "array_sum — 对数组中所有值求和 :"."\n";
$a = array(2, 4, 6, 8);
echo array_sum($a),"\n";
echo array_sum(array()),"\n";
$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo array_sum($b), "\n\n";



?>

