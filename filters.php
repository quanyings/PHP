<div class="container">
<?php 
# 检查是否存在data的name属性
/*
 if (filter_has_var(INPUT_POST, "data")) {
 	// echo "data 存在";
 	$email=$_POST["data"];
 	// echo $email;
 	#过滤掉不合法的字符
 	$email=filter_var($email,FILTER_SANITIZE_EMAIL);
 	echo $email;
 	#验证是否是一个有效的邮箱
 	if (filter_input(INPUT_POST, "data",FILTER_VALIDATE_EMAIL)) {
 		echo "邮箱有效";
 	}else{
 		echo "邮箱无效";
 	}
 }else{
 	echo "data 不存在";
 }
 */

 # 练习:验证一个变量中的值是否是合法的整型
  // $var=23;
  // if (filter_var($var,FILTER_VALIDATE_INT)) {
  // 	echo "变量有效";
  // }else{
  // 	echo "变量无效";
  // }

  # 获取字符串中所有的数值
  // $var="ije42wfifkka23fj";
  // $V=var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));
  // echo $V;

 # 特殊字符
 /*
 $var="<script>alert(1)</script>";
 // echo $var;
 echo filter_var($var,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 */

 # 验证数组中每个元素
/*
 $filters=array(
    "data"=>FILTER_VALIDATE_EMAIL,
    "data2"=>array(
       "filter"=>FILTER_VALIDATE_INT,
       "options"=>array(
           "min_range"=>1,
           "max_range"=>150,
       )
    )
 );
 print_r(filter_input_array(INPUT_POST,$filters));
 */

 # 验证form表单中input的内容,第一个input一定是email,第二个input一定是数值并且数值不能小于1大于150


$arr=array(
  "name"=>"henry",
  "age"=>30,
  "email"=>"1183800414@qq.com",
);
$filters=array(
   "name"=>array(
       "filter"=>FILTER_CALLBACK,
       "options"=>"ucwords",
   ),
   "age"=>array(
   	   "filter"=>FILTER_VALIDATE_INT,
       "options"=>array(
          "min_range"=>1,
          "max_range"=>150,
       )
      
   ),
   "email"=>FILTER_VALIDATE_EMAIL,
);
print_r(filter_var_array($arr,$filters));
 ?>	
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>过滤器</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<br>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<input type="text" name="data" class="form-control"><br>
		<input type="text" name="data2" class="form-control"><br>
		<button class="btn btn-primary btn-block">提交</button>	
		</form>
	</div>
</body>
</html>
<!-- 		
        审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL

		过滤器函数
filter_has_var — 检测是否存在指定类型的变量
filter_id — 返回与某个特定名称的过滤器相关联的id
filter_input_array — 获取一系列外部变量，并且可以通过过滤器处理它们
filter_input — 通过名称获取特定的外部变量，并且可以通过过滤器处理它
filter_list — 返回所支持的过滤器列表
filter_var_array — 获取多个变量并且过滤它们
filter_var — 使用特定的过滤器过滤一个变量
 -->
