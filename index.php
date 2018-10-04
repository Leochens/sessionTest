<?php
// 这是一个最简单的多用户系统
// 知识点
// 1. session
// 2. 数据库 mysql
// 3. php语法
include './check.php';
$flag = checkUserSession();

if($flag){
  echo '已登录';
  $user = $_SESSION['user'];
  echo 
<<<php
  <h1>您好 $user </h1>
  <a href="./logout.php">退出</a>
php;

}else{
  echo '未登录 将跳转到登录页面';
  header("Refresh:1;url=login.php");
}



