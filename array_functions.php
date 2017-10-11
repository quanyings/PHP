<?php 
$array=array("henery","bucky","emily");
# 计算数组个数 count
echo count($array)."<br>";
	# 将数组开头的单元移出数组 array_shift
$newArray=array_shift($array);
print_r($newArray."<br>");
	# 在数组开头插入一个或多个单元 array_unshift
$insertValue=array_unshift($array,"henmw","mame");
print_r($insertValue."<br>");

	# 将一个或多个单元压入数组的末尾（入栈）array_push
array_push($array,"elyse");
print_r($array);
	# 弹出数组最后一个单元（出栈） array_pop
	print_r(array_pop($array)."<br>");
	# 数组排序 sort
	$values=array(22,34,56,21,18);
	print_r(sort($values));
	# 数组转字符串 implode
	$arrayToString=array("a","b","c");
	$value=implode(" ",$arrayToString);
	echo $value."<br>";
	# 字符串转数组 explode
	$array = explode("-", $value);
	echo $array[0];







 ?>