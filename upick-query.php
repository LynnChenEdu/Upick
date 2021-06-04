<?php

require __DIR__.'/parts/__connect_db.php';

$cpu1 = "SELECT `name`, `price`, `imgs`, `introduction` FROM 01cpu "; //抓取01cpu的資料
$stmt1 = $pdo->query($cpu1);
$row1 = $stmt1->fetchall();

$mb2 = "SELECT `name`, `price`, `imgs`, `introduction` FROM 02mb "; //抓取02mb的資料
$stmt2 = $pdo->query($mb2);
$row2 = $stmt2->fetchall();

$vga3 = "SELECT `name`, `price`, `imgs`, `introduction` FROM 03vga "; //抓取03vga的資料
$stmt3 = $pdo->query($vga3);
$row3 = $stmt3->fetchall();

$ram4 = "SELECT `name`, `price`, `imgs`, `introduction` FROM 04ram "; //抓取04ram的資料
$stmt4 = $pdo->query($ram4);
$row4 = $stmt4->fetchall();

$hdd5 = "SELECT `name`, `price`, `imgs`, `introduction` FROM 05hdd "; //抓取05hdd的資料
$stmt5 = $pdo->query($hdd5);
$row5 = $stmt5->fetchall();

$ssd6 = "SELECT `name`, `price`, `imgs`, `introduction` FROM 06ssd "; //抓取01CPU的資料
$stmt6 = $pdo->query($ssd6);
$row6 = $stmt6->fetchall();

echo json_encode($row1, JSON_UNESCAPED_UNICODE);

echo json_encode($row2, JSON_UNESCAPED_UNICODE);

echo json_encode($row3, JSON_UNESCAPED_UNICODE);

echo json_encode($row4, JSON_UNESCAPED_UNICODE);

echo json_encode($row5, JSON_UNESCAPED_UNICODE);

echo json_encode($row6, JSON_UNESCAPED_UNICODE);
?>

