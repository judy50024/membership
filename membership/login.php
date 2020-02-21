<?php

$email=strtolower(trim($_POST['email']));
$pwd= hash('sha256',trim($_POST['pwd']));

include("connection.php");

//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");
 

$query = mysqli_query($connect, "SELECT * FROM membership WHERE eemail='$email' and ppwd='$pwd'");
$rows = mysqli_num_rows($query);

if($rows >= 1 ){
    echo "登入成功";
 }else{
    echo "登入失敗";
 }


?>