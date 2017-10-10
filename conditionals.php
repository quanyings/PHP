<?php 
 # 分支有两个:if switch
 $num=2;
 # 单个if
 /*
 if($num<=4){
 	echo "num的值一定是小于或者等于4";
 }
 */

 # if else
  if ($num>=4) {
  	echo "true";
  }else{
  	echo "false";
  }
 
  # nesting if (if嵌套)
  $num1=4;
  if ($num1>=4) {
  	if ($num1<=10) {
  		echo "num1一定是在4和10之间";
  	}else{
  		echo "num1一定是大于10";
  	}
  }else{
  	echo "num1一定是小于4";
  }

  # 逻辑运算符:&& AND(与):一假即假  || OR(或):一真即真  !(非)  XOR(异或):只有一个为真,结果才为真
  $num2=2;
  if ($num2>3 XOR $num2<10) {
  	echo "num2是大于3且小于10";
  }

  # switch
  $fovColor="hotpink";
  switch ($fovColor) {
  	case 'red':
  		echo "angry";
  		break;
  	case 'yellow':
  		echo "silence";
  		break;
  	case 'green':
  		echo "forgive";
  		break;
  	case 'hotpink':
  		echo "happy";
  		break;	
  	default:
  		echo "smile";
  		break;
  }
 ?>









