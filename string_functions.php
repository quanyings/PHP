<?php 
# string function: 处理字符串的函数
	# 返回字符串的一部分 substr	
$output="helloworld";
// $output=substr($output,1,5);
// echo $output."<br>";
	# 返回给定的字符串 string 的长度  strlen
echo strlen($output)."<br>"; //10
	# 查找字符串首次出现的位置 strpos
$mystring = 'abcadaf';
$findme   = 'a';
$pos = strpos($mystring, $findme,2);
echo $pos."<br>"; //3
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
$pos = strrpos($mystring, $findme,2);
echo $pos."<br>";//5	
	# 去除首尾空格trim	
$output=" hellowoid ";
echo strlen(trim($output))."<br>"; //9
	# 将字符串转为大写 strtoupper
$str="hello nihao";
$newStr=strtoupper($str);
echo $newStr."<br>";
	# 将字符串转为小写 strtolower

	# 将每个单词首字母大写 ucwords	
$newS=ucwords($str);
echo $newS."<br>";
	# 替换所有匹配的内容  str_replace
$text="hello world";
$output=str_replace("world","everybody",$text);
echo $output."<br>";// hello everybody	
	# 判断是否是字符串  is_string
echo is_string($newS)."<br>"; //1
 $new=12;
echo is_string($new)."<br>"; //不打印		
	# 过滤掉数组中非字符串的值	
  $values=array(true,false,"hello",32,"23",23.4,"32.4",'',',',' ',0,"0");
foreach($values as $value){
	#判断value是否是字符串,如果是,那么输出
	if(is_string($value)){
		echo $value." is a string<br>";
	}
}
	# 压缩字符串  gzcompress
	$string="一大堆文字";
	$compressed=gzcompress($string);
	echo $compressed."<br>";	
	# 解压字符串 gzuncompress
    echo gzuncompress($compressed);





 ?>






