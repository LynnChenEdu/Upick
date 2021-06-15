<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

$order_id = $_GET['order_id'];
$sql = "SELECT * FROM order_details WHERE `order_id`=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_GET['order_id'],
]);

if($stmt->rowCount()){
    $row = $stmt->fetchAll();
};

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訂單明細</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
    <!-- memberOderDetail.css -->
    <link rel="stylesheet" href="/Upick/css/memberOderDetail.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container">
        <div class="memberCen_HC">
            <!-- 左側Menu -->
            <div class="memLeftMenu_HC">
                <ul>
                    <li class="memLeftMenuTitle_HC">
                        <p>會員中心</p>
                    </li>
                    <li><a href="/Upick/web/member/memberEdit.php">會員資料</a></li>
                    <li><a href="/Upick/web/member/memberEditPass.php">修改密碼</a></li>
                    <li><a href="/Upick/web/member/memberOrder.php" class="memChange_HC">查詢訂單</a></li>
                    <li><a href="/Upick/web/member/memberFollow.php">追蹤清單</a></li>
                    <li><a href="/Upick/web/member/memberBranch.php">分店資訊</a></li>
                    <li><a href="/Upick/web/member/memService.php">服務條款</a></li>
                    <li><a href="/Upick/web/member/memPrivacyPolicy.php">隱私權政策</a></li>
                    <li><a href="/Upick/web/member/memberQA.php">客服中心</a></li>
                </ul>
            </div>
            <!-- 右側內容 -->
            <div class="memRightCon">
                <div class="memberTitle_HC">
                    <div class="memBackBtn_HC">
                        <a href="/Upick/web/member/memberOrder.php">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </div>
                    <h1 class="memberTitleText_HC">訂單明細</h1>
                    <div class="memSquareBox_HC">
                        <div class="memSquare01_HC"></div>
                        <div class="memSquare02_HC"></div>
                    </div>
                </div>
                <!-- Web訂單明細 -->
                <div class="memWebDetail_HC">
                    <div class="memSerialNumTitle_HC">
                        <h4>訂單編號：</h4>
                        <h4 class="memSerialNum_HC">100612719<?= htmlentities($_GET['order_id']) ?></h4>
                    </div>
                    <table id="memWebTable_HC">
                        <thead>
                            <tr>
                                <th class="memProductNam_HC">商品名稱</th>
                                <th>單價</th>
                                <th>數量</th>
                                <th>小計</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($row as $oderR): ?>
                            <tr>
                                <!-- 商品名稱 -->
                                <td class="memProductNam_HC">
                                    <p class="memProductTitle_HC"><?= htmlentities($oderR['name']) ?>
                                    </p>
                                </td>
                                <!-- 單價 -->
                                <td class="memUPrice_HC price" data-price="<?= htmlentities($oderR['price']) ?>">
                                </td>
                                <!-- 數量 -->
                                <td class="memQuantity_HC qty" data-qty="<?= htmlentities($oderR['quantity']) ?>"></td>
                                <!-- 小計 -->
                                <td class="memSubtotal_HC sub-total"></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- 訂單總額 -->
                    <div class="memTotal_HC">
                        <p class="total_HC">訂單總額：</p>
                        <p class="memDetailPrice_HC memOrderTotal_HC">13899</p>
                    </div>
                    <button onclick="self.location.href='/Upick/web/member/memberOrder.php'"
                        class="wBtnNGr memDetailBtnShare_HC">回訂單列表</button>
                </div>
                <!-- 手機訂單明細 -->
                <div class="memMobileDetail_HC">
                    <div class="memDtailTitle_HC">
                        <p>訂單編號：100612719<?= htmlentities($_GET['order_id']) ?></p>
                    </div>
                    <div class="memDetailArea_HC">
                    <?php foreach ($row as $oderR): ?>
                        <div class="memDetailTr_HC">
                            <p class="memProductTitle_HC"><?= htmlentities($oderR['name']) ?></p>
                            <ul class="memDisplayMe_HC">
                                <li>
                                    <p class="memUPrice_HC">單價：$<?= htmlentities($oderR['price']) ?></p>
                                </li>
                                <li>
                                    <p class="memQuantity_HC">數量：<?= htmlentities($oderR['quantity']) ?></p>
                                </li>
                                <li>
                                    <p class="memSubtotal_HC">小計：$<?= htmlentities($oderR['price']*$oderR['quantity']) ?></p>
                                </li>
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="memDtailTitleReverse_HC">
                        <p>訂單總額：</p>
                        <p class="memPrice_HC memOrderTotal_HC">$13899</p>
                    </div>
                    <button onclick="self.location.href='/Upick/web/member/memberOrder.php'"
                        class="wBtnNGr memDetailBtnShare_HC">回訂單列表</button>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:topMove();" class="memTop_HC">Top</a>

    <!--區隔撐開頁尾的空間-->
    <div class="shpFooterSpace-CL"></div>
    <!--頁尾-->
    <?php include __DIR__ . '/../../parts/html_footer.php' ?>


</body>
<!--SCRIPT-->
<?php include __DIR__ . '/../../parts/scripts.php' ?>
<script>
$(document).ready(function (){
    GetMemberOrderDetail();
});

function GetMemberOrderDetail(){
    $.ajax({
        type: POST,
        url: "order-details-api.php",
        dataType: "json",
        success:function(data){
            console.log("OK");
        },
        error: function(data) {
            console.log("NOK");
        }
    });
};

const calPrices = function () {
    let total = 0;
    $('tbody>tr').each(function(){
        // 顯示單價
        const $price = $(this).find('.price');
        const price = $price.attr('data-price') * 1;
        $price.text('$ ' + price);

        const $qty = $(this).find('.qty');
        const qty = $qty.attr('data-qty') * 1;
        $qty.text(qty);
        $(this).find('.sub-total').text('$ ' + price * qty);
        total += price * qty;
    });
    $('.memOrderTotal_HC').text('$' + total);
};


$(function () {
    calPrices();
});

function topMove() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
};


</script>

</html>