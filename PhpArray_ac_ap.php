<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "array_change_key_case — 将数组中的所有键名修改为全大写或小写:"."\n";
$array=array("First"=>12,"SECOND"=>22,"three"=>32);
echo var_dump(array_change_key_case($array,CASE_UPPER)),"\n";
print_r(array_change_key_case($array,CASE_LOWER));
echo "\n\n";

echo "array_chunk — 将一个数组分割成多个(得到的数组是一个多维数组中的单元):"."\n";
$array=array("First","Second","Three");
$array1 = array("First" => 12, "SECOND" => 22, "three" => 32);
print_r(array_chunk($array, 2));
print_r(array_chunk($array, 2,TRUE));
echo "\n\n";

echo "array_column — 返回数组中指定的一列:"."\n";
$array = array("First", "Second", "Three");
$array1 = array("First" => 12, "SECOND" => 22, "three" => 32);
print_r(array_column($array1, $array));

echo "array_column — 返回数组中指定的一列:"."\n";
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

print_r(array_column($records, "last_name","id"));

echo "array_combine — 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值 :"."\n";
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
print_r(array_combine($a, $b));


echo "array_count_values — 统计数组中所有的值:"."\n";
$b = array('avocado', 'apple', 'banana');
print_r(array_count_values($array));

echo "array_diff_assoc — 带索引检查计算数组的差集(键值都比较):"."\n";
$a = array('green', 'red', 'yellow');
$b = array('green', 'apple', 'banana');
print_r(array_diff_assoc($a, $b));

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);

echo "array_diff_key — 使用键名比较计算数组的差集:"."\n";
$a = array('green', 'red', 'yellow');
$b = array("2"=>'green', 'apple', 'banana');
print_r(array_diff_key($a, $b));

$array = array("First", "Second", "Three");
$array1 = array("First" => 12, "SECOND" => 22, "three" => 32);
print_r(array_diff_key($array, $array1));

echo "array_diff_uassoc — 用用户提供的回调函数做索引检查来计算数组的差集:"."\n";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
function key_compare_func($a,$b){
    if($a===$b){
        return 0;
    }
    
    return ($a>$b)?1:-1;
}
print_r(array_diff_uassoc($array1, $array2, "key_compare_func"));

echo "array_diff_ukey — 用回调函数对键名比较计算数组的差集:"."\n";

$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
echo var_dump(array_diff_ukey($array1, $array2, 'key_compare_func')),"\n\n";//函数key_compare_func在85行定义

echo "array_diff — 计算数组的差集:"."\n";
$array1=array("a"=>"green","red","blue","red");
$array2=array("b"=>"green","yellow","red");
print_r(array_diff($array1, $array2));

echo "array_fill_keys — 使用指定的键和值填充数组:"."\n";
$keys=array("foo",5,6,"bar");
print_r(array_fill_keys($keys, "banana"));


echo "array_fill — 用给定的值填充数组:"."\n";
print_r(array_fill(1, 5, "bike"));
print_r(array_fill(-1, 8, "bike"));

echo "array_filter — 用回调函数过滤数组中的单元 :"."\n";
function old($var){
    return ($var&1);
}

function even($var){
    return(!($var&1));
}

function hold($var){
    return TRUE;
}

$array1=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5);
$array2=array(6,7,8,9,10,11,12);
print_r(array_filter($array1,"old"));
print_r(array_filter($array2,"even"));
print_r(array_filter($array1,"hold"));
print_r(array_filter($array2,"hold"));

$entry = array(
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5=>3
);
print_r(array_filter($entry));

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo var_dump(array_filter($arr,function($key){
    return $key=="a";
},ARRAY_FILTER_USE_KEY));

echo var_dump(array_filter($arr, function($value,$key) {//这两个参数的顺序有要求的
            return $key == "c"||$value==2;
        }, ARRAY_FILTER_USE_BOTH));
        
echo "array_flip — 交换数组中的键和值:"."\n";
$input = array("oranges", "apples", "pears");
$input2 = array("oranges", "apples", "pears","pears");
print_r(array_flip($input));
print_r(array_flip($input2));

echo "array_intersect_assoc — 带索引检查计算数组的交集(键名/值都比较):"."\n";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
print_r(array_intersect_assoc($array1, $array2));

echo "array_intersect_key — 使用键名比较计算数组的交集(键名比较):"."\n";//返回的值只是 array1 中的
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
print_r(array_intersect_key($array1, $array2));


echo "array_intersect_uassoc — 带索引检查计算数组的交集，用回调函数比较索引:"."\n";
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));//strcasecmp???


echo "array_intersect_ukey — 用回调函数比较键名来计算数组的交集:"."\n";//返回的值只是 array1 中的
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);

print_r(array_intersect_ukey($array1, $array2,"key_compare_func"));//key_compare_func在85行定义

echo "array_intersect — 计算数组的交集:"."\n";//返回的键名只是 array1 中的
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
print_r(array_intersect($array1, $array2));

echo "array_key_exists — 检查数组里是否有指定的键名或索引:"."\n";
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
echo var_dump(array_key_exists("cyan", $array2));
echo var_dump(array_key_exists("a", $array2));
$search_array = array('first' => null, 'second' => 4);
// returns false
echo var_dump(isset($search_array['first']));
// returns true
echo var_dump(array_key_exists('first', $search_array))."\n";

echo "array_keys — 返回数组中部分的或所有的键名:"."\n";
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
print_r(array_keys($array2));
print_r(array_keys($array2,"6"));
$array = array("color" => array("blue", "red", "green"),
    "size" => array("small", "medium", "large"));
print_r(array_keys($array));

echo "array_map — 为数组的每个元素应用回调函数 :"."\n";
function cude($n){
    return ($n*$n*$n);
}
$a=array(1,2,3,4,5);
print_r(array_map("cude", $a));

//是用匿名函数
print_r(array_map(function($n){
    return $n*2;
}, range(1, 5)));

//是用更多的数组
function show_spanish($n,$m){
    return ("This number   $n   is called   $m   in Spanish");
}

function map_spanish($n,$m){
   return (array($n=>$m));
}

$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");
print_r(array_map("show_spanish", $a,$b));
print_r(array_map("map_spanish", $a,$b));

echo "array_merge_recursive — 递归地合并一个或多个数组"."\n";//??????????
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
print_r(array_merge_recursive($ar1, $ar2));

echo "array_merge — 合并一个或多个数组:"."\n";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$array3=array(1,2,3,4,5);
$array4=array(6,7,8,9,90);
print_r(array_merge($array1,$array2));
print_r(array_merge($array3,$array4));

echo "array_multisort — 对多个数组或多维数组进行排序:"."\n";//????????????????
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

echo var_dump($ar1);
echo var_dump($ar2);

echo "array_pad — 以指定长度将一个值填充进数组 :"."\n";
$input=array(12,10,5);
print_r(array_pad($input, 5, "abc"));
print_r(array_pad($input, -5, "abc"));
print_r(array_pad($input, 3, "abc"));
print_r(array_pad($input, 2, "abc"));
print_r(array_pad($input, -2, "abc"));

echo "array_pop — 弹出数组最后一个单元（出栈）"."\n";
$input=array(12,34,2135,12,24,53,);
echo array_pop($input),"\n";
print_r($input);

echo "array_product — 计算数组中所有值的乘积:"."\n";
$array=array(2,3,4,5);
$array1=array();
$array2=array("ag","ag");
echo array_product($array),"\n";
echo array_product($array1),"\n";//空数组返回1
echo array_product($array2),"\n";//返回0

echo "array_push — 将一个或多个单元压入数组的末尾（入栈）:"."\n";
$input=array(1,2,3,4,5,6);
array_push($input, "a","b",2,"g",4);
print_r($input);



?>