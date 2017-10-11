<?php 
# echo date(); 至少要给一个参数
echo date('d')."<br>"; #day
echo date('m')."<br>"; #month
echo date('Y')."<br>"; #year 17,Year 2017
echo date('l')."<br>"; #day of week
echo date('Y/m/d')."<br>"; #年月日
echo date('d-m-Y')."<br>"; #日月年

# 时分秒
echo date('h')."<br>"; #hour
echo date('i')."<br>"; #minutes
echo date('s')."<br>"; #seconds
echo date('a')."<br>"; #AM or PM

#设置时区
 date_default_timezone_set("Asia/Shanghai");
 echo date('h:i:sa')."<br>";

# mktime
 $timestamp=mktime(07,00,12,1,24,1988);
 echo $timestamp."<br>";

# 完整的时间
 echo date('m/d/Y h:i:sa',$timestamp)."<br>";

# 字符串转时间
 $timestamp2=strtotime("7:00pm March 22 2016");
 $timestamp3=strtotime("tomorrow");
 $timestamp4=strtotime("next sunday");
 $timestamp5=strtotime("+2 Days");
 echo date('m/d/Y h:i:s',$timestamp5)."<br>";

 ?>