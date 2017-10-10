<?php 
echo "hello world!";
//单行注释 快捷键:Windows窗口 + /
# 单行注释 
/*
 多行注释 快捷键: alt+Windows窗口+/
*/

# variable 变量
$output="hello world";
echo $output;
/*
 前缀: $
 以字母/数字/下划线组成
 数字不能开头
 大小写敏感
 驼峰命名法
*/

# 数据类型
 /*
  string integer float浮点 Boolean array object resource资源类型(函数)
 */
  $num=22;
  $float=22.22;
  $bool=false;
  echo $num,$float,$bool;

  # 运算符
  $num1=10;
  $num2=30;
  $num3=$num1+$num2;
  echo $num3;

  # 字符串拼接: 在PHP中+号就是+号,没有拼接功能
  $string1="hello";
  $string2="world";
  // $greeting=$string1+$string2;
  $greeting=$string1." ".$string2."!";
  echo $greeting;

  # PHP中引号的区别:单引号中的内容是单纯的字符串,双引号中的变量可以正常解析
  $greeting2='$string1 $string2';
  echo $greeting2;

  $greeting3="$string1 $string2";
  echo $greeting3;
 echo "<hr>"; //下划线换行
  # 转译字符
 $string3='they\'re here';
 $string4="they're here";
 echo $string3,$string4."<br>"; // ."<br>" 换行
 printf($string4);
 echo "<hr>";
 
 # 常量:第一个参数是变量名,第二个参数是变量的值
 define("GREETING","Whatever");
 # 常量的第三个参数为bool,true为不分大小写
 define("GREETING","Whatever",true);
 // echo greeting;
 var_dump(greeting);
  ?>













