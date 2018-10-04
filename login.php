<?php
echo '<h1>登录页面在此</h1>';

include 'login.html';
include './check.php';
if(!empty($_GET)){
  $pwd = $_GET['password'];
  $username = $_GET['username'];
  if(checkLogin($username,$pwd)){
    echo "<h1>$username 登陆成功</h1>";
    $_SESSION['user']=$username;
    header("Refresh:1;url=index.php");
  }
}

