<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

// 回應的資料類型為 JSON
header('Content-Type: application/json');

$output = [
    'success' => false,
    'error' => '沒有 id',
    'code' => 0,
    'postData' => $_POST
];

$sql = "UPDATE `members` SET `password`=? WHERE `email`=?";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    md5($_POST['password']),
    $_SESSION['loginUser'],
]);

if($stmt->rowCount()==1){
    $output['success'] = true;
    $output['error'] = '';
} else {
    $output['error'] = '密碼修改失敗';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>