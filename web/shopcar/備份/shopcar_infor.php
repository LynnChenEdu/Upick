<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

$title = '感謝購買';

// 判斷是否登入
if (!isset($_SESSION['loginUser']) or empty($_SESSION['cart'])) {
    header('Location: shopHome.php'); //回首頁
    exit;
}

$total = 0;
foreach ($_SESSION['cart'] as $v) {
    $total += $v['price'] * $v['quantity'];
}

$o_sql = "INSERT INTO `orders`
(`member_id`,`email`, `amount`, `order_date`) 
VALUES 
(?, ?, ?,NOW() )";
$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    $_SESSION['loginUser'],
    $_SESSION['loginUser'],
    $total,
]);

$order_id = $pdo->lastInsertId();

$d_sql = "INSERT INTO `order_details`(`order_id`,`sid`, `price`, `quantity` , `name`) 
VALUES 
(?, ?, ?, ?, ?)";
$d_stmt = $pdo->prepare($d_sql);

foreach ($_SESSION['cart'] as $v) {
    $d_stmt->execute([
        $order_id,
        $v['sid'],
        $v['price'],
        $v['quantity'],
        $v['name'],
    ]);
}

//unset($_SESSION['cart']); // 清除購物車
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPICK電腦零件購物網-購物車</title>

    <link rel="stylesheet" href="/Upick/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="/Upick/css/style_navbar.css">
    <link rel="stylesheet" href="/Upick/css/style_navbar_phone.css">


    <link rel="stylesheet" href="/Upick/css/shopcart_infor_stepbar.css">
    <link rel="stylesheet" href="/Upick/css/shopcart_infor.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!--navbar style-->

    <!--footer style-->
    <link rel="stylesheet" href="/Upick/css/style_footer.css">

    <style>
        .navSearch-CL {
            display: none;
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
    <!-- 步驟攔 請搭配shopcart_stepbar.css -->
    <div class="container carStepContainer_ZY">
        <div class="carStepRow_ZY">
            <div class="carStepGroup_ZY">
                <div class="carStep_ZY col-4 carStepArrow_ZY 
                carStepArrowNotFucus_ZY">
                    <div class="carStepCircle_ZY carStepCircleNotFucus_ZY">1</div>
                    <div class="carStepTitle_ZY 
                    carStepTitleNotFucus_ZY">確認購買商品
                    </div>
                </div>
                <div class="carStep_ZY col-4 carStepArrow_ZY ">
                    <div class="carStepCircle_ZY ">2</div>
                    <div class="carStepTitle_ZY ">填寫付款配送資訊
                    </div>
                </div>
                <div class="carStep_ZY col-4">
                    <div class="carStepCircle_ZY carStepCircleNotFucus_ZY">3</div>
                    <div class="carStepTitle_ZY carStepTitleNotFucus_ZY">完成訂單
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- 表單開始 -->
    <form id="carRegister_ZY" role="form" data-toggle="validator">
        <div class="container carInforcontainer_ZY">
            <div class="row carInforTitle_ZY">
                <h5>訂購資訊</h5>
            </div>

            <div class="row carOrdererInfor_ZY">
                <h4>訂購人資訊</h4>
            </div>
            <div class="row carOrdererName_ZY">
                <table>
                    <tbody>
                        <tr>
                            <th>
                                姓名：
                            </th>
                            <td>
                                王小名
                            </td>
                        </tr>
                        <tr>
                            <th>
                                信箱：
                            </th>
                            <td>
                                123456798@gmail.com
                            </td>
                        </tr>
                        <tr>
                            <th>
                                手機：
                            </th>
                            <td>
                                0912345678
                            </td>
                        </tr>
                        <tr>
                            <th>
                                地址：
                            </th>
                            <td>
                                台北市大安區復興南路一段
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row carOrdererInfor_ZY">
                <h4>收件人資訊</h4>
                <div class="carOrdererCheckbox_ZY">
                    <input type="checkbox" id="sameMember">
                    <label for="sameMember">
                        <p>同會員資料</p>
                    </label>
                </div>
            </div>


            <div class="row carOrdererInforBox">

                <div class="carInputContainer_ZY col-12 col-lg-6 ">
                    <p>姓名</p>
                    <div class="form-group">
                        <input type="text" class="input" name="name" placeholder="姓名" data-error=" 姓名尚未填寫或格式有誤" required="required" value="">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>
                <div class="carInputContainer_ZY  col-12 col-lg-6">
                    <p>信箱</p>
                    <div class="form-group">
                        <input type="email" class="input" name="email" placeholder="example123@gmail.com" data-error="信箱尚未填寫或格式有誤" required="required">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>
                <div class="carInputContainer_ZY  col-12 col-lg-6">
                    <p>手機</p>
                    <div class="form-group">
                        <input type="text" class="input" name="moblie" placeholder="手機" data-error="手機號碼尚未填寫或格式有誤" required="required" pattern="09\d{2}-?\d{3}-?\d{3}">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>

                <div class="carInputContainer_ZY  col-12 col-lg-6">
                    <p>市話</p>
                    <div class="form-group">
                        <input type="text" class="input" placeholder="市話" data-error="市話號碼格式有誤" pattern="0\d{1,2}-?(\d{6,8})(#\d{1,5}){0,1}">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>
                <div class="carInputContainer_ZY  col-12 col-lg-12">
                    <p>配送地址</p>
                    <div class="form-group">
                        <input id="address" type="text" class="input" placeholder="台北市文山區信義路四段123號" data-error="請填寫正確的配送地址" required="required" minlength="13">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>
                <!-- 信用卡資訊 -->
            </div>
            <div class="row carInforPaycontainer_ZY">
                <div class="carInforTitle_ZY">
                    <h5 id="mytest">付款資訊</h5>
                </div>

                <div class="carInforPayGroup_ZY">
                    <div class="carInforPayRadioBox_ZY">
                        <input type="radio" id="creditCard" value="creditCard" name="pay" checked class="true">

                        <label for="creditCard">信用卡</label>
                    </div>
                    <div class="carInforPayRadioBox_ZY">
                        <input type="radio" id="mobilePay" value="mobilePay" name="pay">
                        <label for="mobilePay">虛擬支付</label>
                    </div>
                </div>

                <div class="carInforCreditGroup_ZY carCreditbox boxhideZY" style="display: block;">
                    <div class="carInforPayBox_ZY">
                        <div class="carInforInputBox_ZY">
                            <div>信用卡號碼</div>
                            <div class="form-group">
                                <input type="tel" placeholder="請輸入16碼信用卡號" required class="CarNumber_ZY" maxlength="16" data-error="信用卡尚未填寫或格式有誤" pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" required="required">
                                <div class="help-block with-errors "></div>
                            </div>
                        </div>
                        <div class="carInforCreditCardNumberBox_ZY">
                            <div class="carInforInputNumber_ZY ">
                                <div>驗證碼</div>
                                <div class="form-group">
                                    <input type="tel" placeholder="123" required class=" CarCsvNumber_ZY " maxlength="3" data-error="格式有誤" pattern="\d{3}" required="required">
                                    <div class="help-block with-errors "></div>
                                </div>
                            </div>
                            <div class="carInforInputDate_ZY">
                                <div>有效日期</div>
                                <div class="carInforInputDateBoxOut_ZY">
                                    <div class="carInforInputDateBox_ZY">
                                        <select class="carInforInputDateSelect_ZY">
                                            <option value="">--</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="carInforInputDateBox_ZY">
                                        <select class="carInforInputDateSelect_ZY">
                                            <option value="">--</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="30">30</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carInforCreditGroup_ZY boxhideZY carMobileBox">
                    <div class="carInforMobileText_ZY ">
                        訂單送出後三日內完成付款
                    </div>
                </div>

            </div>


            <div class="row carInforInvoicecontainer_ZY">
                <div class="row carInforTitle_ZY">
                    <h5>發票資訊</h5>
                </div>

                <div class="row carInvoiceBox_ZY">

                    <div class="carInvoicebtn_ZY">
                        <input type="radio" name="invoice" id="personal" checked="personal" value="personal">
                        <label for="personal">個人發票</label>

                    </div>
                    <div class="carInvoicebtn_ZY">
                        <input type="radio" name="invoice" id="company" value="company">
                        <label for="company">公司發票</label>
                    </div>
                </div>
                <div class="row carInvoiceInforBox_ZY invoicehideZY carPersonalBox" style="display: block;">
                    <div class="carInvoiceInforItem_ZY">
                        <input type="radio" name="invoiceinfor" id="member" checked="true" value="memberID">
                        <label for="member">UPICK會員載具</label>
                    </div>
                    <div class="carInvoiceInforItem_ZY form-group">
                        <input type="radio" name="invoiceinfor" id="mobile" value="mobileID">

                        <label for="mobile">手機載具</label>
                        <input type="tel" placeholder="請輸入7碼英數字" id="mobilenum" maxlength="7" data-error="格式有誤" class="mobilenum invoiceinforhideZY" required="required">
                        <div class="help-block with-errors"></div>

                    </div>
                    <div class="carInvoiceInforItem_ZY form-group">
                        <input type="radio" placeholder="請輸入16碼英數字" name="invoiceinfor" id="DigitalCertificate" value="DigitalCertificateID">
                        <label for="DigitalCertificate">自然人憑證</label>
                        <input type="tel" placeholder="請輸入16碼英數字" id="DigitalCertificatenum" class="DigitalCertificatenum invoiceinforhideZY" maxlength="16" data-error="格式有誤">
                        <div class="help-block with-errors"></div>
                    </div>

                </div>
                <div class="row carInvoiceInforBox_ZY invoicehideZY carCompanyBox " style="display: none;">
                    <div class="carInvoiceInforCompanyItem_ZY">
                        <label for="taxID">統一編號</label>
                        <input type="text" name="invoiceinforCompany" id="taxID">

                    </div>
                    <div class="carInvoiceInforCompanyItem_ZY">
                        <label for="companyName">公司名稱</label>
                        <input type="text" name="invoiceinforCompany" id="companyName">
                    </div>
                </div>
            </div>

            <div class="row carInforRemark_ZY">
                <div class="row carInforTitle_ZY">
                    <h5>備註</h5>
                </div>

                <div class="row carInforRemarkBox_ZY">
                    <div class="carInforRemarkTitle_ZY">對商品有任何問題，請至 <span>會員中心>客服中心</span> 填寫表單發問 我們會盡快回覆您！</div>
                    <div class="carInforRemark_ZY">
                        <input type="text" name="remarks" id="remarks" placeholder="請輸入...">
                    </div>
                </div>
                <div class="container carSubmitBtnBox_ZY">

                    <button type="" class="carSubmitBtn_ZY" name="submitbtn" value="註冊" onclick="location.href='shopcar_finish.php?orderid=<?= $order_id ?>'">完成購買</button>
                </div>

            </div>
        </div>

        <div class=" row carFixedInforM_ZY">
            <div class="carFixedInforFontM_ZY">
                <p>共1項商品</p>
                <p>合計：<span>$<?= $total ?></span></p>
            </div>
            <div class="carFixedInforFontBtnBoxM_ZY">
                <button class="carFixedButtonM1_ZY">回購物車</button>
                <button class="carFixedButtonM2_ZY" type="submit" name="submitbtn" value="註冊">確定結帳</button>
            </div>

        </div>
    </form>
    <!-- 表單結束 -->






    <!--區隔撐開頁尾的空間-->

    <!--頁尾-->
    <?php include __DIR__ . '/../../parts/html_footer.php' ?>

    <?php include __DIR__ . '/cart-script.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <!-- <script src="../shopcart_infor/shiocar_infor.js"></script> -->
    <script src="/../Upick/js/shiocar_infor.js"></script>

    <!-- <script>
        $('#carRegister_ZY').validator().on('submit', function (e) {
            if (e.isDefaultPrevented()) { // 未驗證通過 則不處理
                return;
            } else { // 通过后，送出表单
                alert("已送出表單");
            }
            e.preventDefault(); // 防止原始 form 提交表单
        });
    </script> -->

    <script>
        const test = document.getElementById("address").value;
        $('#mytest').click(function() {

            alert(test);
        })
    </script>
</body>

</html>