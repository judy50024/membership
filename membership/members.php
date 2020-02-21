<?php
include('connection.php');//連結資料庫
mysqli_select_db($connect, "tibame");//我要從這個資料庫撈資料
mysqli_query($connect,"set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysqli_query($connect,"select * from membership");//從table中選取全部(*)的資料
echo "&nbsp 資料庫中有" . mysqli_num_rows($data) . "筆資料";//有幾筆資料
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php
            for($i=1;$i<=mysqli_num_rows($data);$i++){
                $rs=mysqli_fetch_row($data);
        ?>
        <tr>
            <td><?php echo $rs[0]?></td>
            <td><?php echo $rs[1]?></td>
            <td><?php echo $rs[2]?></td>
            <td><?php echo $rs[3]?></td>
            </tr>
        <?php }?>



    </table>
    
</body>
</html>


<!-- </p>

<table  border="1″>

<tr>

<td>id</td>

<td>name</td>

<td>age</td>

</tr>

<? for ($i=0;$i<$total_records;$i++) {$row = mysqli_fetch_assoc($result); //將陣列以欄位名索引   ?>

<tr>

<td><? echo $row[id];   ?></td>        <!–印出id欄位的值–>

<td><? echo $row[name];   ?></td> <!–印出name欄位的值–>

<td><? echo $row[age]; ?></td>       <!–印出age欄位的值–>

</tr>

<?    }   ?>

</table> -->