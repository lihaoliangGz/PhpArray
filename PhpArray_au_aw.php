<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "array_udiff_assoc — 带索引检查计算数组的差集，用回调函数比较数据:" . "\n"; //????????????

class cr {

    private $priv_member;

    function cr($val) {
        $this->priv_member = $val;
    }

    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member)
            return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }

}

$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);

$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
print_r($result);

echo "array_udiff_uassoc — 带索引检查计算数组的差集，用回调函数比较数据和索引:" . "\n";

class cr1 {

    private $priv_member;

    function cr1($val) {
        $this->priv_member = $val;
    }

    static function comp_func_cr1($a, $b) {
        if ($a->priv_member === $b->priv_member)
            return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }

    static function comp_func_key1($a, $b) {
        if ($a === $b)
            return 0;
        return ($a > $b) ? 1 : -1;
    }

}

$a = array("0.1" => new cr1(9), "0.5" => new cr1(12), 0 => new cr1(23), 1 => new cr1(4), 2 => new cr1(-15),);
$b = array("0.2" => new cr1(9), "0.5" => new cr1(22), 0 => new cr1(3), 1 => new cr1(4), 2 => new cr1(-15),);

$result = array_udiff_uassoc($a, $b, array("cr1", "comp_func_cr1"), array("cr1", "comp_func_key1"));
print_r($result);

echo "array_udiff — 用回调函数比较数据来计算数组的差集:" . "\n";


echo "array_unique — 移除数组中重复的值:"."\n";
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
print_r(array_unique($input));
print_r(array_unique($input,SORT_NUMERIC));

$input = array(4, "4", "3", 4, 3, "3");
echo var_dump(array_unique($input));

echo "array_unshift — 在数组开头插入一个或多个单元 :"."\n";
$queue=array("orange","banana");
echo var_dump(array_unshift($queue, "gray","yellow"));
print_r($queue);

echo "array_values — 返回数组中所有的值:"."\n";
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

echo "array_walk_recursive — 对数组中的每个成员递归地应用用户函数:"."\n";
$sweet = array('a' => 'apple', 'b' => 'banana');
$fruts=array("sweet"=>$sweet,"sour"=>"lemon");
function test($value,$key){
    echo "$key   $value \n";
}

function test_tra(&$value,$key){//如果 callback 需要直接作用于数组中的值，则给 callback 的第一个参数指定为引用。这样任何对这些单元的改变也将会改变原始数组本身。
    $value="abc";
    echo "$value\n";
}
array_walk_recursive($fruts, "test");
array_walk_recursive($fruts, "test_tra");
print_r($sweet);
print_r($fruts);

echo "array_walk — 使用用户自定义函数对数组中的每个元素做回调处理:"."\n";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix) {
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key) {
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');
echo "-----------------------------\n";
array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";
array_walk($fruits, 'test_print');
?>

