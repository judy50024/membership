<?php 
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
exit("錯誤執行");
}//判斷是否有submit操作

$fr_name=$_POST['fr_name'];
$ls_name=$_POST['ls_name'];
$email=$_POST['email'];
$pwd= hash('sha256',trim($_POST['pwd']));

include('connection.php');//連結資料庫

$q="insert into membership(id,fr_name, ls_name, eemail, ppwd) values (null,'$fr_name','$ls_name','$email', '$pwd')";//向資料庫插入表單傳來的值的sql
$result=$connect->query($q);//執行sql

if ($result) {
    echo '新增會員成功';
} else {
    echo "錯誤: " . $q . "<br>" . $connect->error;
}
mysqli_close($connect);//關閉資料庫
?>

