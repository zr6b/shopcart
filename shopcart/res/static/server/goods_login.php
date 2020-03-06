<?php

$userName = $_POST['userName'];
$userPwd = $_POST['userPwd'];

$host = '127.0.0.1';
$user = 'root';
$pwd = 'root';
$dbname = 'nz1907';
$port = 3306;

$link = mysqli_connect($host, $user, $pwd, $dbname, $port);

$sql = "SELECT `id` FROM `user` WHERE `name` = '{$userName}' AND `pwd` = '{$userPwd}'";

$result = mysqli_query($link, $sql);

// 获取查询结果的数据数量
$num = mysqli_num_rows($result);

if($num == 1){
    echo json_encode(1);
}else{
    echo json_encode(0);
}