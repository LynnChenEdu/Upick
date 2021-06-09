<?php
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

$pid = isset($_GET['pid']) ? $_GET['pid'] : '';
$tableid = isset($_GET['classid']) ? ($_GET['classid']) : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';

$tableid = isset($_GET['classid']) ? ($_GET['classid']) : '';

if ($tableid == '01cpu') {
    $classname = 'CPU';
    $hotsale1 = "SELECT * FROM 01cpu WHERE id BETWEEN 6 AND 9";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 01cpu WHERE id BETWEEN 11 AND 14";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 01cpu WHERE id BETWEEN 34 AND 37";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '02mb') {
    $classname = '主機板';
    $hotsale1 = "SELECT * FROM 02mb WHERE id BETWEEN 21 AND 24";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 02mb WHERE id BETWEEN 16 AND 19";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 02mb WHERE id BETWEEN 6 AND 9";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '04ram') {
    $classname = '記憶體';
    $hotsale1 = "SELECT * FROM 04ram WHERE id BETWEEN 14 AND 17";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 04ram WHERE id BETWEEN 26 AND 29";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 04ram WHERE id BETWEEN 34 AND 37";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '05hdd') {
    $classname = '傳統硬碟';
    $hotsale1 = "SELECT * FROM 05hdd WHERE id BETWEEN 13 AND 16";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 05hdd WHERE id BETWEEN 17 AND 20";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 05hdd WHERE id BETWEEN 26 AND 29";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '06ssd') {
    $classname = '固態硬碟';
    $hotsale1 = "SELECT * FROM 06ssd WHERE id BETWEEN 23 AND 26";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 06ssd WHERE id BETWEEN 16 AND 19";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 06ssd WHERE id BETWEEN 31 AND 34";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '03vga') {
    $classname = '顯示卡';
    $hotsale1 = "SELECT * FROM 03vga WHERE id BETWEEN 26 AND 29";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 03vga WHERE id BETWEEN 21 AND 24";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 03vga WHERE id BETWEEN 12 AND 15";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '07computercase') {
    $classname = '電腦機殼';
    $hotsale1 = "SELECT * FROM 07computercase WHERE id BETWEEN 19 AND 22";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 07computercase WHERE id BETWEEN 9 AND 12";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 07computercase WHERE id BETWEEN 12 AND 15";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '08powersupply') {
    $classname = '電源供應器';
    $hotsale1 = "SELECT * FROM 08powersupply WHERE id BETWEEN 21 AND 24";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 08powersupply WHERE id BETWEEN 13 AND 16";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 08powersupply WHERE id BETWEEN 17 AND 20";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '12fan') {
    $classname = '散熱產品';
    $hotsale1 = "SELECT * FROM 12fan WHERE id BETWEEN 11 AND 14";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 12fan WHERE id BETWEEN 6 AND 9";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 12fan WHERE id BETWEEN 19 AND 22";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

if ($tableid == '09screen') {
    $classname = '週邊產品';
    $hotsale1 = "SELECT * FROM 09screen WHERE id BETWEEN 11 AND 14";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 09screen WHERE id BETWEEN 7 AND 10";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 09screen WHERE id BETWEEN 2 AND 5";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}

$sql = "SELECT * FROM $tableid WHERE `sid`=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$pid]);
$row = $stmt->fetch();

//print_r(array_count_values($row));



// echo json_encode($row);
// exit;
if (empty($row)) {
    header('Location: item_cpu.php');
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
    <!--固定元件:UMA小幫手style-->
    <link rel="stylesheet" href="/Upick/css/style_fixed_element.css">
    <!--商品細節頁 style-->
    <link rel="stylesheet" href="/Upick/css/style_dtl_pg.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <!--固定元件:UMA小幫手html-->
    <?php include __DIR__ . '/../../parts/html_fixed_element.php' ?>


    <!--SiteButton,此為固定元件-->
    <div class="siteBtn-CL">
        <a class="sitBtnGo-CL" href="#shpTopSection_CL">
            <div class="siteBtnInnerTop-CL">
                <p>TOP</p>
            </div>
        </a>
    </div>

    <!--手機版-SiteButton,此為固定元件-->
    <div class="siteBtn-CL2">
        <a class="sitBtnGo-CL" href="#shpTopSection_CL">
            TOP
        </a>
    </div>

    <!--手機版-加入追蹤清單與購物車-->
    <div class="dtlAddCarPhone-CL" data-sid="<?= $row['sid'] ?>" data-tbid="<?= $tableid ?>">
        <span>售價$<?= $row['price'] ?></span>
        <button class="dtlAddFollowPhoneBtn-CL"><i class="far fa-heart"></i> 加入追蹤清單</button>
        <button class="dtlAddShopCarPhoneBtn-CL"><i class="fas fa-shopping-cart"></i> 加入購物車</button>
    </div>



    <div class="aniContainerOut-CL">

        <!--商場區首頁-->
        <div class="shpTop-CL">
            <section id="shpTopSection_CL"></section>
            <!--商場頂部預留200px給navbar-->
            <div class="shpTopSpace-CL"></div>
            <!--商場內容區-->
            <div class="container shpContainer-CL">
                <!--面包屑-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fas fa-map-marker-alt"></i>
                        <li class="breadcrumb-item"><a href="/Upick/shopHome.php?aniarea=none&shparea=block">Home</a></li>
                        <li class="breadcrumb-item"><a href="item_page.php?classid=<?= $tableid ?>"><?= $classname ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $row['name'] ?></li>
                    </ol>
                </nav>
                <!--細節頁頂部區域(圖片商品標題金額等資訊區)-->
                <div class="row dtlTop-CL">
                    <!--左邊區域-商品圖與小輪播-->
                    <div class="col-lg-5">
                        <!--頂部區域商品圖-大-->
                        <div class="dtlTopImg-CL">
                            <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $row['imgs'] ?>.jpg" alt="">
                        </div>
                        <!--手機版-面包屑-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb2">
                                <i class="fas fa-map-marker-alt dtlMarker-CL"></i>
                                <li class="breadcrumb-item"><a href="/Upick/shopHome.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="item_page.php?classid=<?= $tableid ?>"><?= $classname ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $row['name'] ?></li>
                            </ol>
                        </nav>
                        <!--頂部區域商品圖-小-->
                        <div class="dtlTopImgMore-CL">
                            <!--小輪播上下頁btn-->
                            <div class="dtlImgBtn-CL">
                                <div class="dtlImgPre-CL"><i class="fas fa-angle-left"></i></div>
                                <div class="dtlImgNext-CL"><i class="fas fa-angle-right"></i></div>
                            </div>
                            <!--小輪播小圖區-->
                            <div class="dtlImgCaro-CL">
                                <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $row['imgs'] ?>.jpg" alt="">

                            </div>
                        </div>

                    </div>
                    <!--右邊區域-商品名稱金額等資訊-->
                    <div class="col-lg-6">
                        <!--右邊區域-商品標題-->
                        <h1 class="dtlTopName-CL"><?= $row['name'] ?></h1>
                        <?php  ?>
                        <span class="dtlId-CL">編號：<?= $row['sid'] ?></span>
                        <?php ?>
                        <div class="dtlSpec-CL">
                            <div class="dtlItemInfo-CL">
                                商品特色<br>
                                RAZER CYNOSA LITE<br>
                                • 柔軟緩衝的電競級按鍵<br>
                                • 10鍵齊發不衝突防鬼鍵<br>
                                • 1000Hz超快輪詢率<br>
                                • 防潑水耐用設計<br>
                                <br>
                                RAZER VIPER<br>
                                • RAZER™ 光學滑鼠按鍵軸<br>
                                • RAZER 5G 光學感測器<br>
                                • 69 公克輕量設計<br>
                                •RAZER™ SPEEDFLEX 纜線<br>
                                •內建 DPI 儲存<br>
                                • 8 顆可編程按鍵<br>
                                <br>
                                優惠　--<br>
                                贈品　--<br>
                                配送　宅配 UPICK門市取貨<br>
                                付款　信用卡 / LinePay / 街口支付 / 門市付款<br>
                            </div>
                            <!--商品保固與數量選擇區-->
                            <div class="dtlItemWarranty-CL">
                                • <?= isset($row['warranty']) ? ($row['warranty']) : '保固 N/A' ?><br>
                                • 6期0利率<br>
                                <div class="dtlQt-CL">
                                    <i class="fas fa-minus"></i>
                                    <select name="dtlQtSelec-CL" id="dtlQtSelec-CL">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="dtlDollor-CL">
                                    售價 $<?= $row['price'] ?>
                                </div>
                            </div>
                        </div>
                        <!--加入追蹤清單與購物車-->
                        <div class="dtlAddCar-CL" data-sid="<?= $row['sid'] ?>" data-tbid="<?= $tableid ?>">
                            <button class="wBtnAddTrace btnShare dtlAddFollow-CL"><i class="far fa-heart shpHeart"></i> 加入追蹤清單</button>
                            <br>
                            <button class="wBtnAddCar btnShare dtlAddCarBtn-CL"><i class="fas fa-shopping-cart"></i> 加入購物車</button>
                        </div>
                    </div>
                </div>

                <!--中間其他商品輪播牆-->
                <h2 class="dtlOther-CL">其他人也看了...</h2>

                <!--其他熱銷商品區-->
                <div class="shpHotSale-CL">
                    <!--熱銷商品內容-商品輪播牆-->
                    <div id="carouselExampleControls" class="carousel slide shpHotSaleContain-CL" data-bs-ride="carousel">
                        <!--商品輪播牆內容-修改商品內容顯示區總高度-->
                        <div class="carousel-inner shpHotSaleInner-CL">
                            <!--商品輪播牆單頁內容-->
                            <div class="carousel-item active shpHotItemCaro-CL">
                                <div class="row">
                                    <?php foreach ($hotsalerow1 as $r) { ?>
                                        <div class="col">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=<?= $tableid ?>" data-sid="<?= $r['sid'] ?>" data-tbid="<?= $tableid ?>">
                                                <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                                                <p><?= $r['name'] ?></p>
                                            </a>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>

                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="carousel-item shpHotItemCaro-CL">
                                <div class="row">
                                    <?php foreach ($hotsalerow2 as $r) { ?>
                                        <div class="col">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=<?= $tableid ?>" data-sid="<?= $r['sid'] ?>" data-tbid="<?= $tableid ?>">
                                                <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                                                <p><?= $r['name'] ?></p>
                                            </a>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                                        </div>
                                    <?php } ?>
                                </div>

                            </div>


                            <div class="carousel-item shpHotItemCaro-CL">
                                <div class="row">
                                    <?php foreach ($hotsalerow3 as $r) { ?>
                                        <div class="col">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=<?= $tableid ?>" data-sid="<?= $r['sid'] ?>" data-tbid="<?= $tableid ?>">
                                                <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                                                <p><?= $r['name'] ?></p>
                                            </a>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                                        </div>
                                    <?php } ?>
                                </div>

                            </div>

                        </div>
                        <a class="carousel-control-prev shpCaroBtn-CL" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <!--修改商品輪播牆上一頁之icon與顏色-->
                            <i class="fas fa-angle-left shpCaroBtnIcon-CL"></i>
                        </a>
                        <a class="carousel-control-next shpCaroBtn-CL" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <!--修改商品輪播牆下一頁之icon與顏色-->
                            <i class="fas fa-angle-right shpCaroBtnIcon-CL"></i>
                        </a>
                    </div>
                </div>




                <!--商品詳細內容區-->
                <section id="shpCpuSection_CL"></section>
                <div class="dtlItemContain-CL">
                    <!--商品說明切換btn-->
                    <div class="dtlSwitchBtn-CL">
                        <div class="dtlSwitchBG-CL"></div>
                        <span>商品介紹</span>
                        <span>商品規格</span>
                    </div>
                    <!--商品詳細內容-圖片區-->
                    <div class="dtlContainImg-CL">
                        <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $row['imgs'] ?>.jpg" alt="">
                    </div>
                    <!--商品詳細內容-規格表格區-->
                    <div class="dtlContainTable-CL">
                        <div class="dtlContainTbHead-CL">
                            <h4><?= $row['name'] ?></h4>
                        </div>
                        <table>
                            <?php foreach ($row as $key => $value) { ?>
                                <tr>
                                    <td><?= $key ?></td>
                                    <td><?= $value ?></td>
                                </tr>
                            <?php } ?>




                        </table>
                    </div>


                </div>



                <!--區隔撐開頁尾的空間-->
                <div class="shpFooterSpace-CL"></div>

            </div>
            <!--頁尾-->
            <?php include __DIR__ . '/../../parts/html_footer.php' ?>

        </div>
    </div>



    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
    <?php include __DIR__ . '/../../web/shopcar/cart-script.php' ?>
    <?php include __DIR__ . '/../../web/member/follow-script.php' ?>
    <script>
        $(document).ready(function() {
            //手機版-小於1200則searchbar不出現
            if ($(window).width() < 1200) {
                $('.umaHelper-CL').css('display', 'none');
                $('.umaConvert-CL').css('display', 'none');
                $('.navSearch-CL').css('display', 'none');
            }


            //WEB版-大於1200
            if ($(window).width() >= 1200) {
                //searchBar出現
                $('.navSearch-CL').css('display', 'block');
                //searchBar下滑效果
                setTimeout(function() {
                    $('.navSearch-CL').css('transform', 'translateY(0vh)').css('transition', '0.6s')
                        .css('opacity', '1');
                }, 1000);

                $('.umaHelper-CL').css('display', 'none');
                $('.umaConvert-CL').css('display', 'none');
            }


        })

        //商品說明區切換btn效果
        let btnBgLeft = $('.dtlSwitchBG-CL').offset().left;
        $('.dtlSwitchBtn-CL span:nth-child(2)').css('color', '#383E44');
        $('.dtlSwitchBtn-CL span').click(function() {
            var btnTextLeft = $(this).offset().left;
            var btnBgGo = btnTextLeft - btnBgLeft;
            $('.dtlSwitchBG-CL').css('transform', 'translateX(' + btnBgGo + 'px)').css('transition', '0.3s');
            $(this).css('color', '#383E44').siblings().css('color', '#ffffff');
        })

        //點選規格按鈕的切換
        /*手機板不出現圖片只出現表格*/
        if ($(window).width() < 1200) {
            $('.dtlContainTable-CL').css('display', 'block');
        }
        /*WEB版有規格說明切換btn*/
        if ($(window).width() >= 1200) {
            $('.dtlContainTable-CL').css('display', 'none');
            $('.dtlSwitchBtn-CL span:nth-child(3)').click(function() {
                $('.dtlContainTable-CL').css('display', 'block');
                $('.dtlContainImg-CL').css('display', 'none');
            })

            //點選圖片按鈕的切換
            $('.dtlSwitchBtn-CL span:nth-child(2)').click(function() {
                $('.dtlContainTable-CL').css('display', 'none');
                $('.dtlContainImg-CL').css('display', 'block');
            })

        }



        //固定元件出現時機
        $(window).scroll(function() {
            var mouseScroll = $(window).scrollTop();

            if ($(window).width() < 1200) {
                $('.siteBtn-CL').css('display', 'none');
                $('.umaHelper-CL').css('display', 'none');
                $('.umaConvert-CL').css('display', 'none');
                //手機版加入購物車橫條出現時機
                var h4Top = $('.dtlContainTable-CL table').offset().top;
                if (mouseScroll > h4Top) {
                    $('.dtlAddCarPhone-CL').css('display', 'none');
                }
                if (mouseScroll <= h4Top) {
                    $('.dtlAddCarPhone-CL').css('display', 'flex');
                }
            }

            if ($(window).width() >= 1200) {
                var dtlTop = $('.dtlTop-CL').offset().top;
                //siteBtn在一開始不出現,當mouse scroll超過頂端商品資料區才出現
                if (mouseScroll > dtlTop) {
                    $('.siteBtn-CL').css('transform', 'translateY(0vh)');
                } else {
                    $('.siteBtn-CL').css('transform', 'translateY(150vh)');
                }

                //umahelper在超過輪播牆時出現,超過商品區第一列時消失
                var switchBtn = $('.dtlSwitchBtn-CL').offset().top;
                if ((mouseScroll > dtlTop) && (mouseScroll < switchBtn)) {
                    $('.umaHelper-CL').css('display', 'block');
                    $('.umaConvert-CL').css('display', 'block');
                }
                if ((mouseScroll >= switchBtn) || (mouseScroll <= dtlTop)) {
                    $('.umaHelper-CL').css('display', 'none');
                    $('.umaConvert-CL').css('display', 'none');
                }
            }
        })



        //siteBtn按鈕選擇效果
        $('.siteBtnInner-CL').click(function() {
            $(this).css('backgroundColor', '#374052').children('p').css('color', '#ffffff');
            $(this).parent('.sitBtnGo-CL').siblings().children('.siteBtnInner-CL').css('backgroundColor', '#ffffff')
                .children('p').css('color', '#374052');

        })

        //上滑至商場特效
        $('.sitBtnGo-CL').click(function() {
            //取得點選按鈕的href屬性的內容, 也就是連結的目標
            var result = $(this).attr('href');
            //偵測對應前往的section的top距離(減200是因為navbar佔了200的高度,若不減掉當到達指定位置時會被navBar蓋掉內容)
            targetTop = $(result).position().top - 200;
            //滑動整頁到指定的位置     
            $('html,body,.aniContainerOut-CL').animate({
                scrollTop: targetTop
            }, 500);

        });


        //加入購物車
        const addToCartBtn = $('.dtlAddCarBtn-CL');
        addToCartBtn.click(function() {
            const card = $(this).parent('.dtlAddCar-CL');
            const sid = card.attr('data-sid');
            const classid = card.attr('data-tbid');
            const qty = document.getElementById("dtlQtSelec-CL").value;
            $.get('/Upick/web/shopcar/cart-api.php', {
                action: 'add',
                sid,
                classid,
                qty
            }, function(data) {
                console.log(data);
                showCartCount(data); // 更新選單上數量的提示
            }, 'json');
        })
        //加入追蹤
        const addToFollowtBtn = $('.dtlAddFollow-CL');
        addToFollowtBtn.click(function() {
            const card = $(this).parent('.dtlAddCar-CL');
            const sid = card.attr('data-sid');
            const classid = card.attr('data-tbid');
            const qty = 1;
            $.get('/Upick/web/member/follow-api.php', {
                action: 'add',
                sid,
                classid,
                qty
            }, function(data) {
                console.log(data);
                showCartCount(data); // 更新選單上數量的提示
            }, 'json');
        })
        //加入追蹤2
        const addToFollowtBtn2 = $('.shpHeart-CL');
        addToFollowtBtn2.click(function() {
            const card = $(this).parent().prev('a');
            const sid = card.attr('data-sid');
            const classid = card.attr('data-tbid');
            const qty = 1;
            $.get('/Upick/web/member/follow-api.php', {
                action: 'add',
                sid,
                classid,
                qty
            }, function(data) {
                console.log(data);
            }, 'json');
        })

        //手機版-加入購物車
        const addToCartBtnPhone = $('.dtlAddShopCarPhoneBtn-CL');
        addToCartBtnPhone.click(function() {
            const card = $(this).closest('.dtlAddCarPhone-CL');
            const sid = card.attr('data-sid');
            const classid = card.attr('data-tbid');
            const qty = 1;
            $.get('/Upick/web/shopcar/cart-api.php', {
                action: 'add',
                sid,
                classid,
                qty
            }, function(data) {
                console.log(data);
                showCartCount(data); // 更新選單上數量的提示
            }, 'json');
        })

        //手機版-加入追蹤
        const addToFollowPhone = $('.dtlAddFollowPhoneBtn-CL');
        addToFollowPhone.click(function() {
            const card = $(this).closest('.dtlAddCarPhone-CL');
            const sid = card.attr('data-sid');
            const classid = card.attr('data-tbid');
            const qty = 1;
            $.get('/Upick/web/member/follow-api.php', {
                action: 'add',
                sid,
                classid,
                qty
            }, function(data) {
                console.log(data);
            }, 'json');
        })
    </script>



</body>

</html>