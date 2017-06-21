<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "array — 新建一个数组 :"."\n";

echo "arsort — 对数组进行逆向排序并保持索引关系 :"."\n";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
print_r($fruits);

echo "asort — 对数组进行排序并保持索引关系:"."\n";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
print_r($fruits);

echo "compact — 建立一个数组，包括变量名和它们的值 :"."\n";
$city = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
print_r($result);

echo "count — 计算数组中的单元数目，或对象中的属性个数:"."\n";
$array=array(1,2,3,4,5);
echo count($array)."\n";
echo count(array())."\n";
echo count(NULL)."\n";
echo count(FALSE)."\n";

$food = array('fruits' => array('orange', 'banana', 'apple'),'veggie' => array('carrot', 'collard', 'pea'));
echo "--------------------\n";
echo count($food)."\n";
echo count($food,COUNT_RECURSIVE) . "\n\n";

echo "current — 返回数组中的当前单元:"."\n";
$transport = array('foot', 'bike', 'car', 'plane');
echo current($transport)."\n";
next($transport)."\n";
echo current($transport) . "\n";
echo prev($transport)."\n";
echo end($transport)."\n";

$x=array();
echo var_dump(current($x))."\n";

$y=array("abc",array());

print_r(current($y));
echo "\n";
print_r(next($y));

echo "each — 返回数组中当前的键／值对并将数组指针向前移动一步 :"."\n";
$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
print_r(each($foo));
echo current($foo)."\n\n";

$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');

reset($fruit);
while (list($key, $val) = each($fruit)) {
    echo "$key => $val\n";
}

echo "end — 将数组的内部指针指向最后一个单元 :"."\n";
$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
echo end($foo)."\n";

echo "extract — 从数组中将变量导入到当前的符号表:"."\n";

$size = "large";
$var_array = array("color" => "blue",
    "size" => "medium",
    "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size\n\n";

echo "in_array — 检查数组中是否存在某个值:"."\n";
$os=array("lvoevo","Mac","Irix","Linux","y",5);
echo var_dump(in_array("Y", $os));
echo var_dump(in_array("y", $os));
echo var_dump(in_array("5", $os));
echo var_dump(in_array("5", $os,TRUE));

$a = array(array('p', 'h'), array('p', 'r'), 'o');
echo var_dump(in_array(array('p','h'), $a)),"\n\n";

echo "key_exists — 别名 array_key_exists():"."\n\n";

echo "key — 从关联数组中取得键名:"."\n";
$os = array("lvoevo", "Mac", "Irix", "Linux", "y", 5);
echo key($os)."\n";
end($os);
echo key($os)."\n";
echo var_dump(key(array()))."\n\n";

echo "krsort — 对数组按照键名逆向排序:"."\n";
$os = array("lvoevo", "Mac", "Irix", "Linux", "y", 5);
krsort($os);
print_r($os);
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
krsort($fruits);
print_r($fruits);

echo "ksort — 对数组按照键名排序:"."\n";
$os = array("lvoevo", "Mac", "Irix", "Linux", "y", 5);
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($os);
print_r($os);
ksort($fruits);
print_r($fruits);

echo "list — 把数组中的值赋给一组变量 :"."\n";
$info = array('coffee', 'brown', 'caffeine');
list($a,$b,$c)=$info;
echo "$a\n$b\n$c\n";
list($a,,$c)=$info;
echo "$a\n$c\n";
list(,, $c) = $info;
echo "$c\n";
// list() 不能对字符串起作用
list($bar) = "abcde";
echo  var_dump($bar),"\n\n"; // NULL

//使用嵌套的 list()
list($a,list($b,$c))=array(1,array(2,3));
echo "$a\n$b\n$c\n";

//在 list() 中使用数组索引
$info = array('coffee', 'brown', 'caffeine');
list($xy[0],$xy[1],$xy[2])=$info;
echo var_dump($xy);

//list() 和索引顺序定义
$foo=array(2=>"a","foo"=>"b",0=>"c",);
$foo[1]="d";
print_r($foo);

list($x,$y,$z)=$foo;
echo "$x\n$y\n$z\n\n";

echo "natcasesort — 用\"自然排序\"算法对数组进行不区分大小写字母的排序 "."\n";
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
sort($array1);
print_r($array1);

natcasesort($array2);
print_r($array2);

echo "natsort — 用\"自然排序\"算法对数组排序 (区分大小写):"."\n";
$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");
sort($array1);
print_r($array1);
natsort($array2);
print_r($array2);

$negative = array('-5', '3', '-2', '0', '-1000', '9', '1');
print_r($negative);
natsort($negative);
print_r($negative);

$zeros = array('09', '8', '10', '009', '011', '0');
print_r($zeros);
natsort($zeros);
print_r($zeros);
echo "\n";

echo "next — 将数组中的内部指针向前移动一位 "."\n";
$transport = array('foot', 'bike', 'car', 'plane');
echo next($transport)."\n";
end($transport);
echo var_dump(next($transport))."\n";

echo "pos — current() 的别名:"."\n";
$transport = array('foot', 'bike', 'car', 'plane');
echo pos($transport),"\n\n";

echo "prev — 将数组的内部指针倒回一位:"."\n";
$transports = array('foot', 'bike', 'car', 'plane');
//echo var_dump(prev($transports));
next($transports);
echo var_dump(prev($transports)),"\n";

echo "range — 根据范围创建数组，包含指定的元素 :"."\n";
$range = range(0,6);
print_r($range);
$range1 = range(0, 6,3);//第三个参数是步增值
print_r($range1);
$range2 = range("a", "i");
print_r($range2);
$range3 = range("ab", "id");//字符序列值仅限单个字符。 如果长度大于1，仅仅使用第一个字符。 
print_r($range3);
echo "\n";

echo "reset — 将数组的内部指针指向第一个单元:"."\n";
$array = array('step one', 'step two', 'step three', 'step four');
next($array);
next($array);
echo current($array)."\n";
echo reset($array)."\n\n";

echo "rsort — 对数组逆向排序:"."\n";
$fruits = array("lemon", "orange", "banana", "apple");
print_r(var_dump(rsort($fruits)));
print_r($fruits);

$fruits1 = array("first"=>"lemon", "second"=>"orange","three"=>"banana", "four"=>"apple");
print_r(var_dump(rsort($fruits1)));
print_r($fruits1);
echo "\n";

echo "shuffle — 打乱数组:"."\n";
$fruits2 = array("first" => "lemon", "second" => "orange", "three" => "banana", "four" => "apple");
shuffle($fruits2);
print_r($fruits2);
echo "\n";

echo "sizeof — count() 的别名 :"."\n";
$fruits3 = array("first" => "lemon", "second" => "orange", "three" => "banana", "four" => "apple");
echo sizeof($fruits3),"\n\n\n";

echo "sort — 对数组排序:"."\n";
$oo = array("lemon", "orange", "banana", "apple");
$ool = array("first" => "lemon", "second" => "orange", "three" => "banana", "four" => "apple");
sort($oo);
print_r($oo);
sort($ool);
print_r($ool);
echo "\n";

//不区分大小写
$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
print_r($fruits);
echo "\n";

echo "uasort — 使用用户自定义的比较函数对数组中的值进行排序并保持索引关联 :"."\n";
$array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4,'z'=>-4);
print_r($array);

function cmp($a,$b){
    if($a==$b){
        return 0;
    }
    return ($a>$b)?1:-1;
}

var_dump(uasort($array, "cmp"));
print_r($array);

echo "uksort — 使用用户自定义的比较函数对数组中的键名进行排序 :"."\n";
$a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);
function cmp_1($a,$b){
    if($a==$b){
        return 0;
    }
    return ($a>$b)?1:-1;
}

uksort($a, "cmp_1");
print_r($a);
echo "\n";

echo "usort — 使用用户自定义的比较函数对数组中的值进行排序 :"."\n";//?????????????
$a = array(3, 2, 5, 6, 1);
function cmp_2($a,$b){
    if($a==$b){
        return 0;
    }
    
    return ($a<$b)?1:-1;
}
usort($a, "cmp_2");
print_r($a);



?>



