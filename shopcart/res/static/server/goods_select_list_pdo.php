<?php

// 接收参数
$id = $_POST['goods_id'];

// 链接数据库,执行查询语句

$dsn  = 'mysql:dbname=nz1907;host=127.0.0.1;port=3306';
$user = 'root';
$pwd = 'root';

$pdo = new PDO($dsn , $user ,$pwd);

$sql = "SELECT * FROM `goods` WHERE `goods_id` = {$id} ";

$stmt = $pdo->query($sql);

$arr = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($arr);