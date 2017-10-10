<?php 
 # loops:循环--让项目制作的更高效
 # 根据某个条件,重复执行某段代码
 /*
  for
  while
  do while
  foreach
 */

  # for 循环 :在知道循环次数的时候使用
  # @params - init,condition,inc
  /*
  for ($i=0; $i < 10; $i++) { 
  	 echo ($i+1)."<br>";
  }
  */

  # while 循环
  # @params -condition
  /*
  $i=0;
  while ($i<10) {
  	echo $i."<br>";
  	$i++;
  }
  echo $i."<br>";
  */

 # do while
 # @params -condition
  /*
  $i=0;
  do{
  	echo $i."<br>";
  	$i++;
  }while($i<10);
  */

  # foreach 循环:下标数组,第一个参数是要遍历的数组,第二个参数是遍历出的数组放在哪个变量里
  $people=array("henry","bucky","emily");
  echo $people[1]."<br>";	
  foreach ($people as $person) {
  	echo $person;
  	echo "<br>";
  }

 # foreach 循环:关联数组
  $people=array(
  	"henry"=>"henry@qq.com",
  	"bucky"=>"bucky@qq.com",
  	"emily"=>"emily@qq.com",
  );
  foreach ($people as $key =>$value) {
  	echo $key.":".$value;
  	echo "<br>";
  }

 //打印1-100之间7的倍数
  for ($i=0; $i < 100; $i++) { 
  	if ($i%7==0) {
  		echo $i;
  	}
  }
    echo "<br>";

  //打印1-100之间个位为7的数
  for ($i=0; $i < 100; $i++) { 
  	if ($i%10==7) {
  		echo $i;
  	}
  }
   echo "<br>";

 //打印1-100之间十位为7的数
  for ($i=0; $i < 100; $i++) { 
  	if ($i/7>=10&&$i/8<10) {
  		echo $i;
  	}
  }
  echo "<br>";

 //打印1-100之间个位不为7,十位不为7,以及不是7的倍数
  for ($i=0; $i < 100; $i++) { 
  	if ($i%7!=0&&$i%10!=7&&$i/7<10||$i/8>=10) {
  		echo $i;
  	}
  }
  echo "<br>";

 //打印99乘法表
  for ($i=1; $i <= 9; $i++) { 
  	for ($j=1; $j <=$i ; $j++) {
  	    $chengji=$j*$i." ";
  	    $cheng=$j."*".$i."="; 
  		echo $cheng.$chengji;
  	}
  	echo "<br>"; 
  }
  echo "<br>";

 ?>

<!-- 打印1-100之间7的倍数
     打印1-100之间个位为7的数
     打印1-100之间十位为7的数
     打印1-100之间个位不为7,十位不为7,以及不是7的倍数
     打印99乘法表
 -->







