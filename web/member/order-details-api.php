<?php require __DIR__.'/__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

// 回應的資料類型為 JSON
header('Content-Type: application/json');

// 讓 email 的內容不要重複
// UPDATE `members` SET `email`=CONCAT(ROUND(RAND()*100000),'@gmail.com')

$output = [
    'success' => false,
    'error' => '沒有 id',
    'code' => 0,
];

// TODO: 欄位資料檢查

$order_id = $_GET["order_id"] ? $_GET["order_id"] : "";

$sql2 = "SELECT * FROM order_details WHERE `order_id`=?";

$stmt2 = $pdo->prepare($sql2);

$stmt2->execute([$_GET['order_id'],]);

if($stmt2->rowCount()==1){
    $row2 = $stmt2->fetch();
    $output['success'] = true;
    $output['error'] = '';
} else {
    $output['error'] = '無資料';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>