<?php 
$users=["name"=>"henry","email"=>"1183800414@qq.com","age"=>25];
$users=serialize($users);
setcookie('users',$users,time()+86400);
$users=unserialize($_COOKIE['users']);
print_r($users);

 ?>