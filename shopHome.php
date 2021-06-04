<?php
require __DIR__ . '/__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

//若點擊navbar商場btn,則首頁動畫區消失
$aniarea = isset($_GET['aniarea']) ? ($_GET['aniarea']) : 'block';
$shparea = isset($_GET['shparea']) ? ($_GET['shparea']) : 'none';
if ($shparea == 'block') {
    $shpTopSpace = '120';
}

//熱銷商品sql query
$hotsale1 = "SELECT * FROM 06ssd WHERE id BETWEEN 11 AND 14";
$hsrow1 = $pdo->query($hotsale1)->fetchAll();
$hotsale2 = "SELECT * FROM 01cpu WHERE id BETWEEN 6 AND 9";
$hsrow2 = $pdo->query($hotsale2)->fetchAll();
$hotsale3 = "SELECT * FROM 03vga WHERE id BETWEEN 15 AND 18";
$hsrow3 = $pdo->query($hotsale3)->fetchAll();

//零件區sql query
$cpu1 = "SELECT * FROM 01cpu WHERE id BETWEEN 1 AND 4";
$cpurow1 = $pdo->query($cpu1)->fetchAll();
$cpu2 = "SELECT * FROM 01cpu WHERE id BETWEEN 5 AND 8";
$cpurow2 = $pdo->query($cpu2)->fetchAll();

$mb1 = "SELECT * FROM 02mb WHERE id BETWEEN 1 AND 4";
$mbrow1 = $pdo->query($mb1)->fetchAll();
$mb2 = "SELECT * FROM 02mb WHERE id BETWEEN 5 AND 8";
$mbrow2 = $pdo->query($mb2)->fetchAll();

$ram1 = "SELECT * FROM 04ram WHERE id BETWEEN 1 AND 4";
$ramrow1 = $pdo->query($ram1)->fetchAll();
$ram2 = "SELECT * FROM 04ram WHERE id BETWEEN 5 AND 8";
$ramrow2 = $pdo->query($ram2)->fetchAll();

$hdd1 = "SELECT * FROM 05hdd WHERE id BETWEEN 1 AND 4";
$hddrow1 = $pdo->query($hdd1)->fetchAll();
$hdd2 = "SELECT * FROM 05hdd WHERE id BETWEEN 5 AND 8";
$hddrow2 = $pdo->query($hdd2)->fetchAll();

$ssd1 = "SELECT * FROM 06ssd WHERE id BETWEEN 1 AND 4";
$ssdrow1 = $pdo->query($ssd1)->fetchAll();
$ssd2 = "SELECT * FROM 06ssd WHERE id BETWEEN 5 AND 8";
$ssdrow2 = $pdo->query($ssd2)->fetchAll();

$vga1 = "SELECT * FROM 03vga WHERE id BETWEEN 1 AND 4";
$vgarow1 = $pdo->query($vga1)->fetchAll();
$vga2 = "SELECT * FROM 03vga WHERE id BETWEEN 5 AND 8";
$vgarow2 = $pdo->query($vga2)->fetchAll();

$shell1 = "SELECT * FROM 07computercase WHERE id BETWEEN 1 AND 4";
$shellrow1 = $pdo->query($shell1)->fetchAll();
$shell2 = "SELECT * FROM 07computercase WHERE id BETWEEN 5 AND 8";
$shellrow2 = $pdo->query($shell2)->fetchAll();

$power1 = "SELECT * FROM 08powersupply WHERE id BETWEEN 1 AND 4";
$powerrow1 = $pdo->query($power1)->fetchAll();
$power2 = "SELECT * FROM 08powersupply WHERE id BETWEEN 5 AND 8";
$powerrow2 = $pdo->query($power2)->fetchAll();

$fan1 = "SELECT * FROM 12fan WHERE id BETWEEN 1 AND 4";
$fanrow1 = $pdo->query($fan1)->fetchAll();
$fan2 = "SELECT * FROM 12fan WHERE id BETWEEN 5 AND 8";
$fanrow2 = $pdo->query($fan2)->fetchAll();

$screen1 = "SELECT * FROM 09screen WHERE id BETWEEN 1 AND 4";
$screenrow1 = $pdo->query($screen1)->fetchAll();
$screen2 = "SELECT * FROM 09screen WHERE id BETWEEN 5 AND 8";
$screenrow2 = $pdo->query($screen2)->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include __DIR__ . '../parts/html_head.php' ?>
    <!--固定元件:UMA小幫手style-->
    <link rel="stylesheet" href="/Upick/css/style_fixed_element.css">

    <!--首頁landing style-->
    <link rel="stylesheet" href="/Upick/css/style_shopHome.css">

</head>

<body>
    <?php include __DIR__ . '../parts/html_navbar.php' ?>
    <!--固定元件:UMA小幫手html-->
    <?php include __DIR__ . '../parts/html_fixed_element.php' ?>

    <!--自製scrollbar-->
    <!--<div class="scrollBar-CL">
        <div class="scrollTP-CL"></div>
    </div>-->



    <!--SiteButton,此為固定元件-->
    <div class="siteBtn-CL">
        <a class="sitBtnGo-CL" href="#shpCpuSection_CL">
            <div class="siteBtnInner-CL">
                <p>CPU</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpBoardSection_CL">
            <div class="siteBtnInner-CL">
                <p>主機板</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpRamSection_CL">
            <div class="siteBtnInner-CL">
                <p>記憶體</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpHddSection_CL">
            <div class="siteBtnInner-CL">
                <p>傳統<br>硬碟</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpSddSection_CL">
            <div class="siteBtnInner-CL">
                <p>固態<br>硬碟</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpVgaSection_CL">
            <div class="siteBtnInner-CL">
                <p>顯示卡</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpShellSection_CL">
            <div class="siteBtnInner-CL">
                <p>電腦<br>機殼</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpPowerSection_CL">
            <div class="siteBtnInner-CL">
                <p>電源<br>供應器</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpFanSection_CL">
            <div class="siteBtnInner-CL">
                <p>散熱<br>模組</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpAcceSection_CL">
            <div class="siteBtnInner-CL">
                <p>週邊<br>零件</p>
            </div>
        </a>
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



    <div class="aniContainerOut-CL">
        <!--撐高頂部的navbar區塊-->
        <div class="aniTopSpace"></div>

        <div class="aniContainer-CL" style="display:<?= $aniarea ?>;">
            <!--UPICK外層-->
            <div class="aniUpickOut-CL">
                <!--UPICK區塊-->
                <div class="aniUpick-CL">
                    <h1>UPICK</h1>
                    <h4>想組裝適合自己的電腦嗎？</h4>
                    <h4 class="aniUpickWord-CL">那就交給UPICK吧！ <i class="fas fa-angle-double-right"></i></h4>

                    <!--upick大LOGO圖-->
                    <div class="aniLogoU-CL">
                        <img src="./icon/logo-w.svg" alt="">
                    </div>
                </div>
            </div>

            <!--WEPICK外層具有遮罩-->
            <div class="aniWepickOut-CL">
                <!--WEPICK區塊-->
                <div class="aniWepick-CL">
                    <h1>WEPICK</h1>
                    <h4> 覺得組裝電腦跟挑選適合自己的筆電很困難嗎？</h4>
                    <h4 class="aniWepickWord-CL"><i class="fas fa-angle-double-left"></i> 讓WEPICK來幫助你吧！</h4>

                    <!--wepick大LOGO圖-->
                    <div class="aniLogoW-CL">
                        <img src="./icon/logo-b.svg" alt="">
                    </div>

                </div>
            </div>

            <!--scroll文字-->
            <div class="aniScroll-CL">
                <h3>下滑至商場</h3>
                <i class="fas fa-angle-double-down"></i>
            </div>

        </div>

        <!--商場區首頁-->
        <div class="shpTop-CL" style="display:<?= $shparea ?>;">
            <section id="shpTopSection_CL"></section>
            <!--商場頂部預留200px給navbar-->
            <div class="shpTopSpace-CL" style="height:<?= $shpTopSpace ?>px;"></div>
            <!--商場內容區-->
            <div class="container shpContainer-CL">
                <!--頂部輪播牆-修改輪播牆寬度-->
                <div id="carouselExampleIndicators" class="carousel slide shpCarouselOut-CL" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <!--修改輪播牆內容高度-->
                    <div class="carousel-inner shpCarousel-CL">
                        <div class="carousel-item active">
                            <img src="images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <!--修改商品輪播牆上一頁之icon與顏色-->
                        <i class="fas fa-angle-left shpCaroBtnIcon-CL"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <!--修改商品輪播牆下一頁之icon與顏色-->
                        <i class="fas fa-angle-right shpCaroBtnIcon-CL"></i>
                    </a>
                </div>

                <!--精選熱銷標題-->
                <div class="shpHotTitle-CL">
                    <h1>精選熱銷</h1>
                </div>

                <!--面包屑-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fas fa-map-marker-alt"></i>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Home</a></li>
                    </ol>
                </nav>


                <!--熱銷商品區-->
                <div class="shpHotSale-CL">
                    <!--熱銷商品標題-->
                    <div class="shpHotSaleTitle-CL">
                        <h1>熱銷商品</h1>
                    </div>
                    <!--熱銷商品內容-商品輪播牆-->
                    <div id="carouselExampleControls" class="carousel slide shpHotSaleContain-CL" data-bs-ride="carousel">
                        <!--商品輪播牆內容-修改商品內容顯示區總高度-->
                        <div class="carousel-inner shpHotSaleInner-CL">
                            <!--商品輪播牆單頁內容-->
                            <div class="carousel-item active shpHotItemCaro-CL">
                                <div class="row">
                                    <?php foreach ($hsrow1 as $r) { ?>
                                        <div class="col-lg">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=06ssd">
                                                <img src="<?= WEB_ROOT ?>/images/product/06ssd/<?= $r['imgs'] ?>.jpg" alt="" class="shpCaroImg_CL">
                                                <p class="shpCaroName_CL"><?= $r['name'] ?></p>
                                            </a>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="carousel-item shpHotItemCaro-CL">
                                <div class="row">
                                    <?php foreach ($hsrow2 as $r) { ?>
                                        <div class="col-lg">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=01cpu">
                                                <img src="<?= WEB_ROOT ?>/images/product/01cpu/<?= $r['imgs'] ?>.jpg" alt="" class="shpCaroImg_CL">
                                                <p class="shpCaroName_CL"><?= $r['name'] ?></p>
                                            </a>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>



                            <div class="carousel-item shpHotItemCaro-CL">
                                <div class="row">
                                    <?php foreach ($hsrow3 as $r) { ?>
                                        <div class="col-lg">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=03vga">
                                                <img src="<?= WEB_ROOT ?>/images/product/03vga/<?= $r['imgs'] ?>.jpg" alt="" class="shpCaroImg_CL">
                                                <p class="shpCaroName_CL"><?= $r['name'] ?></p>
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


                <!--全站熱銷零組件圖片-->
                <div class="shpHotItemImg-CL"><img src="./images/img_03.png" alt=""></div>


                <!--CPU零件區-->
                <section id="shpCpuSection_CL"></section>
                <div class="shpItem-CL shpCpu-CL">
                    <div class="shpItemSkew-CL">
                        <h3>中央處理器CPU</h3>
                    </div>
                    <div class="row">
                        <?php foreach ($cpurow1 as $r) : ?>
                            <div class="col">
                                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=01cpu">
                                    <img class="shpProductImg_CL" src="<?= WEB_ROOT ?>/images/product/01cpu/<?= $r['imgs'] ?>.jpg" alt="">
                                    <div class="shpItemInfo-CL data-sid=" <?= $r['item'] & $r['id'] ?>">
                                        <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                                </a>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                            </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <div class="row">
                    <?php foreach ($cpurow2 as $r) : ?>
                        <div class="col">
                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=01cpu">
                                <img src="<?= WEB_ROOT ?>/images/product/01cpu/<?= $r['imgs'] ?>.jpg" alt="">
                                <div class="shpItemInfo-CL">
                                    <p><?= $r['name'] ?></p>
                            </a>
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                        </div>
                </div>
            <?php endforeach; ?>
            </div>
            <a href="/Upick/web/product/item_page.php?classid=01cpu"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
        </div>


        <!--主機板零件區-->
        <section id="shpBoardSection_CL"></section>
        <div class="shpItem-CL shpBoard-CL">
            <div class="shpItemSkew-CL">
                <h3>主機板</h3>
            </div>
            <div class="row">
                <?php foreach ($mbrow1 as $r) : ?>
                    <div class="col">
                        <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=02mb">
                            <img src="<?= WEB_ROOT ?>/images/product/02mb/<?= $r['imgs'] ?>.jpg" alt="">
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                        </a>
                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                    </div>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="row">
            <?php foreach ($mbrow2 as $r) : ?>
                <div class="col">
                    <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=02mb">
                        <img src="<?= WEB_ROOT ?>/images/product/02mb/<?= $r['imgs'] ?>.jpg" alt="">
                        <div class="shpItemInfo-CL">
                            <p><?= $r['name'] ?></p>
                    </a>
                    <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                </div>
        </div>
    <?php endforeach; ?>
    </div>
    <a href="/Upick/web/product/item_page.php?classid=02mb"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
    </div>


    <!--記憶體RAM零件區-->
    <section id="shpRamSection_CL"></section>
    <div class="shpItem-CL shpRam-CL">
        <div class="shpItemSkew-CL">
            <h3>記憶體RAM</h3>
        </div>
        <div class="row">
            <?php foreach ($ramrow1 as $r) : ?>
                <div class="col">
                    <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=04ram">
                        <img src="<?= WEB_ROOT ?>/images/product/04ram/<?= $r['imgs'] ?>.jpg" alt="">
                        <div class="shpItemInfo-CL">
                            <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                    </a>
                    <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                </div>
        </div>
    <?php endforeach; ?>
    </div>
    <div class="row">
        <?php foreach ($ramrow2 as $r) : ?>
            <div class="col">
                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=04ram">
                    <img src="<?= WEB_ROOT ?>/images/product/04ram/<?= $r['imgs'] ?>.jpg" alt="">
                    <div class="shpItemInfo-CL">
                        <p><?= $r['name'] ?></p>
                </a>
                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
            </div>
    </div>
<?php endforeach; ?>
</div>
<a href="/UPICK/web/product/item_page.php?classid=04ram"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
</div>


<!--傳統硬碟HDD零件區-->
<section id="shpHddSection_CL"></section>
<div class="shpItem-CL shpHdd-CL">
    <div class="shpItemSkew-CL">
        <h3>傳統硬碟HDD</h3>
    </div>
    <div class="row">
        <?php foreach ($hddrow1 as $r) : ?>
            <div class="col">
                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=05hdd">
                    <img src="<?= WEB_ROOT ?>/images/product/05hdd/<?= $r['imgs'] ?>.jpg" alt="">
                    <div class="shpItemInfo-CL">
                        <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                </a>
                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
            </div>
    </div>
<?php endforeach; ?>
</div>
<div class="row">
    <?php foreach ($hddrow2 as $r) : ?>
        <div class="col">
            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=05hdd">
                <img src="<?= WEB_ROOT ?>/images/product/05hdd/<?= $r['imgs'] ?>.jpg" alt="">
                <div class="shpItemInfo-CL">
                    <p><?= $r['name'] ?></p>
            </a>
            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
        </div>
</div>
<?php endforeach; ?>
</div>
<a href="/UPICK/web/product/item_page.php?classid=05hdd"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
</div>



<!--固態硬碟SSD零件區-->
<section id="shpSddSection_CL"></section>
<div class="shpItem-CL shpSdd-CL">
    <div class="shpItemSkew-CL">
        <h3>固態硬碟SSD</h3>
    </div>
    <div class="row">
        <?php foreach ($ssdrow1 as $r) : ?>
            <div class="col">
                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=06ssd">
                    <img src="<?= WEB_ROOT ?>/images/product/06ssd/<?= $r['imgs'] ?>.jpg" alt="">
                    <div class="shpItemInfo-CL">
                        <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                </a>
                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
            </div>
    </div>
<?php endforeach; ?>
</div>
<div class="row">
    <?php foreach ($ssdrow2 as $r) : ?>
        <div class="col">
            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=06ssd">
                <img src="<?= WEB_ROOT ?>/images/product/06ssd/<?= $r['imgs'] ?>.jpg" alt="">
                <div class="shpItemInfo-CL">
                    <p><?= $r['name'] ?></p>
            </a>
            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
        </div>
</div>
<?php endforeach; ?>
</div>
<a href="/UPICK/web/product/item_page.php?classid=06ssd"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
</div>



<!--顯示卡零件區-->
<section id="shpVgaSection_CL"></section>
<div class="shpItem-CL shpVga-CL">
    <div class="shpItemSkew-CL">
        <h3>顯示卡</h3>
    </div>
    <div class="row">
        <?php foreach ($vgarow1 as $r) : ?>
            <div class="col">
                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=03vga">
                    <img src="<?= WEB_ROOT ?>/images/product/03vga/<?= $r['imgs'] ?>.jpg" alt="">
                    <div class="shpItemInfo-CL">
                        <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                </a>
                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
            </div>
    </div>
<?php endforeach; ?>
</div>
<div class="row">
    <?php foreach ($vgarow1 as $r) : ?>
        <div class="col">
            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=03vga">
                <img src="<?= WEB_ROOT ?>/images/product/03vga/<?= $r['imgs'] ?>.jpg" alt="">
                <div class="shpItemInfo-CL">
                    <p><?= $r['name'] ?></p>
            </a>
            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
        </div>
</div>
<?php endforeach; ?>
</div>

<a href="/UPICK/web/product/item_page.php?classid=03vga"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
</div>



<!--電腦機殼零件區-->
<section id="shpShellSection_CL"></section>
<div class="shpItem-CL shpShell-CL">
    <div class="shpItemSkew-CL">
        <h3>電腦機殼</h3>
    </div>
    <div class="row">
        <?php foreach ($shellrow1 as $r) : ?>
            <div class="col">
                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=07computercase">
                    <img src="<?= WEB_ROOT ?>/images/product/07computercase/<?= $r['imgs'] ?>.jpg" alt="">
                    <div class="shpItemInfo-CL">
                        <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                </a>
                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
            </div>
    </div>
<?php endforeach; ?>
</div>
<div class="row">
    <?php foreach ($shellrow2 as $r) : ?>
        <div class="col">
            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=07computercase">
                <img src="<?= WEB_ROOT ?>/images/product/07computercase/<?= $r['imgs'] ?>.jpg" alt="">
                <div class="shpItemInfo-CL">
                    <p><?= $r['name'] ?></p>
            </a>
            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
        </div>
</div>
<?php endforeach; ?>
</div>
<a href="/UPICK/web/product/item_page.php?classid=07computercase"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
</div>



<!--電源供應器零件區-->
<section id="shpPowerSection_CL"></section>
<div class="shpItem-CL shpPower-CL">
    <div class="shpItemSkew-CL">
        <h3>電源供應器</h3>
    </div>
    <div class="row">
        <?php foreach ($powerrow1 as $r) : ?>
            <div class="col">
                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=08powersupply">
                    <img src="<?= WEB_ROOT ?>/images/product/08powersupply/<?= $r['imgs'] ?>.jpg" alt="">
                    <div class="shpItemInfo-CL">
                        <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                </a>
                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
            </div>
    </div>
<?php endforeach; ?>
</div>
<div class="row">
    <?php foreach ($powerrow2 as $r) : ?>
        <div class="col">
            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=08powersupply">
                <img src="<?= WEB_ROOT ?>/images/product/08powersupply/<?= $r['imgs'] ?>.jpg" alt="">
                <div class="shpItemInfo-CL">
                    <p><?= $r['name'] ?></p>
            </a>
            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
        </div>
</div>
<?php endforeach; ?>
</div>
<a href="/UPICK/web/product/item_page.php?classid=08powersupply"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
</div>



<!--散熱零件區-->
<section id="shpFanSection_CL"></section>
<div class="shpItem-CL shpFan-CL">
    <div class=" shpItemSkew-CL">
        <h3>散熱零件</h3>
    </div>
    <div class="row">
        <?php foreach ($fanrow1 as $r) : ?>
            <div class="col">
                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=12fan">
                    <img src="<?= WEB_ROOT ?>/images/product/12fan/<?= $r['imgs'] ?>.jpg" alt="">
                    <div class="shpItemInfo-CL">
                        <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                </a>
                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
            </div>
    </div>
<?php endforeach; ?>
</div>
<div class="row">
    <?php foreach ($fanrow2 as $r) : ?>
        <div class="col">
            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=12fan">
                <img src="<?= WEB_ROOT ?>/images/product/12fan/<?= $r['imgs'] ?>.jpg" alt="">
                <div class="shpItemInfo-CL">
                    <p><?= $r['name'] ?></p>
            </a>
            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
        </div>
</div>
<?php endforeach; ?>
</div>
<a href="/UPICK/web/product/item_page.php?classid=12fan"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
</div>



<!--週邊零件區-->
<section id="shpAcceSection_CL"></section>
<div class="shpItem-CL shpAcce-CL">
    <div class="shpItemSkew-CL">
        <h3>週邊零件</h3>
    </div>
    <div class="row">
        <?php foreach ($screenrow1 as $r) : ?>
            <div class="col">
                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=09screen">
                    <img src="<?= WEB_ROOT ?>/images/product/09screen/<?= $r['imgs'] ?>.jpg" alt="">
                    <div class="shpItemInfo-CL">
                        <p class="shpItemInfoP-CL"><?= $r['name'] ?></p>
                </a>
                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
            </div>
    </div>
<?php endforeach; ?>
</div>
<div class="row">
    <?php foreach ($screenrow2 as $r) : ?>
        <div class="col">
            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=09screen">
                <img src="<?= WEB_ROOT ?>/images/product/09screen/<?= $r['imgs'] ?>.jpg" alt="">
                <div class="shpItemInfo-CL">
                    <p><?= $r['name'] ?></p>
            </a>
            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
        </div>
</div>
<?php endforeach; ?>
</div>
<a href="/UPICK/web/product/item_page.php?classid=09screen"><span class="shpSeeMore-CL">看更多 <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span></a>
</div>



<!--區隔撐開頁尾的空間-->
<div class="shpFooterSpace-CL"></div>

</div>
<!--頁尾-->
<?php include __DIR__ . '../parts/html_footer.php' ?>
</div>
</div>



<!--SCRIPT-->
<?php include __DIR__ . '../parts/scripts.php' ?>
<script>
    //加入購物車後端JS
    const addToCartBtn = $('.shpShopCar-CL');
    addToCartBtn.click(function() {
        const card = $(this).closest('.shpItemInfo-CL');
        const pid = card.attr('data-sid');
        const qty = 1;
        // console.log({pid, qty}, card.find('.card-title').text());
        $.get('cart-api.php', {
            action: 'add',
            pid,
            qty
        }, function(data) {
            console.log(data);
            showCartCount(data); // 更新選單上數量的提示
        }, 'json');
    })



    //前端頁面效果JQ
    $('.shpUpHot-CL').css('display', 'none');
    $('.shpWpHot-CL').css('display', 'none');

    //網頁初始商場與頁尾全display:none; scrollBar也消失
    $(document).ready(function() {
        //手機版-首頁不顯示
        if ($(window).width() < 1200) {
            $('.aniContainer-CL').css('display', 'none');
            $('.umaHelper-CL').css('display', 'none');
            $('.umaConvert-CL').css('display', 'none');
        }

        //WEB版-各區域在初始顯示方式
        if ($(window).width() >= 1200) {
            //商場不出現
            //$('.shpTop-CL').css('display', 'none');
            //頁尾不出現
            $('.shpFooterOut-CL').css('display', 'none');
            $('.shpFooterColor-CL').css('display', 'none');
            //scroll不出現
            $('.scrollBar-CL').css('display', 'none');
            //搜尋BAR不出現
            //$('.navSearch-CL').css('display', 'none');
            //UMA小幫手不出現
            $('.umaHelper-CL').css('display', 'none');

            //UMA對話區不出現
            $('.umaConvert-CL').css('display', 'none');

            //頁面初始LOGO出現效果
            setTimeout(function() {
                $('.aniLogoU-CL img').css('transform', 'translateY(0vh)').css('opacity',
                    '0.3');
            }, 800);


            //按下向下滑動之btn後
            $('.aniScroll-CL').click(function() {
                //商場出現
                $('.shpTop-CL').css('display', 'block');
                //頁尾出現
                $('.shpFooterOut-CL').css('display', 'block');
                $('.shpFooterColor-CL').css('display', 'block');
                //首頁向上滑動
                $('.aniContainerOut-CL').css('transform', 'translateY(-100vh)').css('transition', '2s');
                //scrollBar出現
                $('.scrollBar-CL').css('display', 'block');
                //searchBar出現
                $('.navSearch-CL').css('display', 'block');

                $('body').css('height', '100vh');

                //searchBar下滑效果
                setTimeout(function() {
                    $('.navSearch-CL').css('transform', 'translateY(0vh)').css('transition',
                            '1s')
                        .css('opacity', '1');
                }, 1000);
            })
            //UPICK熱銷商品頁籤預設顯示
            $('.shpUpHot-CL .shpPageMartBtn-CL:nth-child(1)').css('backgroundColor', '#7FE0DC');

            //WEPICK熱銷商品頁籤預設顯示
            $('.shpWpHot-CL .shpPageMartBtn-CL:nth-child(1)').css('backgroundColor', '#7FE0DC');
        }
    })



    //動態更新scrollbar高度
    var newScrollTP = $('.scrollTP-CL').height() * $(window).height() / $('.aniContainerOut-CL').height();
    $('.scrollTP-CL').css('height', newScrollTP + 'px');
    $(window).scroll(function() {
        let mouseScroll = $(window).scrollTop();
        console.log(`mouse scroll is `, mouseScroll);
        var scrollRange = $('.scrollBar-CL').height() - $('.scrollTP-CL').height();
        let newScrollHeight = scrollRange * (mouseScroll / ($('.aniContainerOut-CL').height() - ($(window)
            .height() * 2)));
        $('.scrollTP-CL').css('transform', 'translateY(' + newScrollHeight + 'px)');
    })



    //siteBtn在一開始不出現,當mouse scroll超過熱銷商品區才出現
    $(window).scroll(function(siteBtndisplay) {
        let mouseScroll2 = $(window).scrollTop();
        let siteBtnShow = $('.shpHotSale-CL').offset().top;
        if (mouseScroll2 > siteBtnShow) {
            $('.siteBtn-CL').css('transform', 'translateY(0vh)');
        } else {
            $('.siteBtn-CL').css('transform', 'translateY(150vh)');
        }
    })

    //siteBtn按鈕選擇效果
    $('.siteBtnInner-CL').click(function() {
        $(this).css('backgroundColor', '#383E44').children('p').css('color', '#ffffff');
        $(this).parent('.sitBtnGo-CL').siblings().children('.siteBtnInner-CL').css('backgroundColor', '#ffffff')
            .children('p').css('color', '#383E44');

    })


    //上滑至商場特效
    $('.sitBtnGo-CL').click(function() {
        var result = $(this).attr('href');
        targetTop = $(result).position().top - 1150;
        $('html,body,.aniContainerOut-CL').animate({
            scrollTop: targetTop
        }, 500);

    });

    //upick,wepick熱銷商品區頁籤按鈕效果
    $('.shpPageMartBtn-CL').click(function() {
        $(this).css('backgroundColor', '#7FE0DC').siblings().css('backgroundColor', 'transparent');
    })


    //首頁滑鼠動畫效果
    var maskWidth = $('.aniWepickOut-CL').width();
    $(document).mousemove(function() {
        xPosi = event.clientX;
        if (xPosi >= 1600) {
            $('.aniWepickOut-CL').css('width', '580px');
            return false;
        }
        if (xPosi <= 460) {
            $('.aniWepickOut-CL').css('width', '1750px');
            return false;
        }
        var moveMiddle = $(window).width() / 2;
        if (xPosi >= moveMiddle) {
            var mouseMoveRange = parseInt(xPosi - moveMiddle);
            var finalWidth = maskWidth - mouseMoveRange;

            $('.aniWepickOut-CL').css('transform', 'translateX(-10vw) skewX(10deg)');
            $('.aniWepick-CL').css('transform', 'translateX(5vw) skewX(-10deg)');

            $('.aniLogoU-CL img').css('transform', 'translateX(0vw)').css('opacity', '0.3');
            $('.aniLogoW-CL img').css('transform', 'translateX(-30vw)').css('opacity', '0');
        }

        if (xPosi < moveMiddle) {
            var mouseMoveRange = parseInt(moveMiddle - xPosi);
            var finalWidth = maskWidth + mouseMoveRange;

            $('.aniWepickOut-CL').css('transform', 'translateX(-10vw) skewX(-10deg)');
            $('.aniWepick-CL').css('transform', 'translateX(5vw) skewX(10deg)');

            $('.aniLogoU-CL img').css('transform', 'translateX(130vw)').css('opacity', '0');
            $('.aniLogoW-CL img').css('transform', 'translateX(0vw)').css('opacity', '0.3');
        }

        setTimeout(function() {
            $('.aniWepickOut-CL').css('width', finalWidth)
        }, 20);
    })


    //點擊navBar首頁button即導回首頁
    $('.navHome-CL').click(function() {
        location.reload();
    })



    //UPICK與WEPICK熱銷商品的輪播牆下滑效果
    $(window).scroll(function() {
        if ($(window).width() < 1200) {
            $('.shpCpu-CL').css('opacity', '1');
            $('.shpBoard-CL').css('opacity', '1');
            $('.shpRam-CL').css('opacity', '1');
            $('.shpHdd-CL').css('opacity', '1');
            $('.shpSdd-CL').css('opacity', '1');
            $('.shpVga-CL').css('opacity', '1');
            $('.shpShell-CL').css('opacity', '1');
            $('.shpPower-CL').css('opacity', '1');
            $('.shpFan-CL').css('opacity', '1');
            $('.shpAcce-CL').css('opacity', '1');
            $('.shpAcce-CL').css('opacity', '1');
        }

        if ($(window).width() >= 1200) {
            var mouseScroll = $(window).scrollTop();
            //CPU輪播牆下滑效果
            var cpuaroShow = $('.shpContainer-CL').offset().top;
            if (mouseScroll > cpuaroShow) {
                console.log(`cpu is `, mouseScroll);
                setTimeout(function() {
                    $('.shpCpu-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //主機板輪播牆下滑效果
            var boardCaroShow = $('.shpHotTitle-CL').offset().top;
            if (mouseScroll > boardCaroShow) {
                setTimeout(function() {
                    $('.shpBoard-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //記憶體輪播牆下滑效果
            var ramCaroShow = $('.shpCpu-CL').offset().top;
            if (mouseScroll > ramCaroShow) {
                setTimeout(function() {
                    $('.shpRam-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //HDD輪播牆下滑效果
            var hddCaroShow = $('.shpBoard-CL').offset().top;
            if (mouseScroll > hddCaroShow) {
                setTimeout(function() {
                    $('.shpHdd-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //SDD輪播牆下滑效果
            var sddCaroShow = $('.shpRam-CL').offset().top;
            if (mouseScroll > sddCaroShow) {
                setTimeout(function() {
                    $('.shpSdd-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //VGA輪播牆下滑效果
            var vgaCaroShow = $('.shpHdd-CL').offset().top;
            if (mouseScroll > vgaCaroShow) {
                setTimeout(function() {
                    $('.shpVga-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //SHELL輪播牆下滑效果
            var shellCaroShow = $('.shpSdd-CL').offset().top;
            if (mouseScroll > shellCaroShow) {
                setTimeout(function() {
                    $('.shpShell-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //POWER輪播牆下滑效果
            var powerCaroShow = $('.shpVga-CL').offset().top;
            if (mouseScroll > powerCaroShow) {
                setTimeout(function() {
                    $('.shpPower-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //FAN輪播牆下滑效果
            var fanCaroShow = $('.shpShell-CL').offset().top;
            if (mouseScroll > fanCaroShow) {
                setTimeout(function() {
                    $('.shpFan-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //ACCE輪播牆下滑效果
            var acceCaroShow = $('.shpPower-CL').offset().top;
            if (mouseScroll > acceCaroShow) {
                setTimeout(function() {
                    $('.shpAcce-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //umahelper在超過熱銷商品時出現,超過power時消失
            var hotItemTop = $('.shpHotSale-CL').offset().top;
            if ((mouseScroll > hotItemTop) && (mouseScroll < acceCaroShow)) {
                $('.umaHelper-CL').css('display', 'block');
                $('.umaConvert-CL').css('display', 'block');
            }
            if ((mouseScroll >= acceCaroShow) || (mouseScroll <= hotItemTop)) {
                $('.umaHelper-CL').css('display', 'none');
                $('.umaConvert-CL').css('display', 'none');
            }
        }
    })
</script>



</body>

</html>