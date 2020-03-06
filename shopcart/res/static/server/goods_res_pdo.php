<?php


$userName = $_POST['userName'];
$userPwd = $_POST['userPwd'];

$dsn  = 'mysql:dbname=nz1907;host=127.0.0.1;port=3306';
$user = 'root';
$pwd = 'root';

$pdo = new PDO($dsn , $user ,$pwd);

$sql = "INSERT INTO `user`(`name` , `pwd`) VALUES('{$userName}' , '{$userPwd}')";

$bool = $pdo->exec($sql);

// // 写入成功,执行结果是1,写入失败是false
if($bool == 1){
    echo json_encode('1');
}else{
    echo json_encode('0');
}