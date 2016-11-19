<?php 
header("Content-Type:text/html;charset=utf-8");
$username=$_POST['username'];
$password=$_POST['password'];
echo "用户名:".$username."密码".$password;
// 页面跳转
header("location:./01form1.html?flag=1");

 ?>