<?php

$username=$_POST['username'];
$password=$_POST['password'];
 
 if($username==""){
	 echo "用户名不能为空";
      
 }else{
	 if($password!=""){
		 echo "<script>alert("登陆成功！");</script>";
	 }
	 
 }

