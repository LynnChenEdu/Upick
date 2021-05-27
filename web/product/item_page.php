<!DOCTYPE html>
<html lang="en">

<head>
    <!--資料庫連結-->
    <?php
    require __DIR__ . '/../../__connect_db.php';
    define('WEB_ROOT', '/UPICK');
    session_start();

    $tableid = isset($_GET['classid']) ? ($_GET['classid']) : '';

    //篩選區
    //定義10項篩選條件
    if ($tableid == '01cpu') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 01cpu GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '型號';
        $selector[1]['option'] = "SELECT model FROM 01cpu GROUP BY model";
        $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
        $selecount = 2;
        $k = 0;
    }
    if ($tableid == '02mb') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 02mb GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '記憶體插槽數';
        $selector[1]['option'] = "SELECT number_memory_solts FROM 02mb GROUP BY number_memory_solts";
        $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
        $selecount = 2;
        $k = 0;
    }
    if ($tableid == '04ram') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 04ram GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '單條容量';
        $selector[1]['option'] = "SELECT single_capacity FROM 04ram GROUP BY single_capacity";
        $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
        $selecount = 2;
        $k = 0;
    }
    if ($tableid == '05hdd') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 05hdd GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '容量';
        $selector[1]['option'] = "SELECT capacity FROM 05hdd GROUP BY capacity";
        $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
        $selector[2]['name'] = '碟盤尺寸(吋)';
        $selector[2]['option'] = "SELECT disk_size FROM 05hdd GROUP BY disk_size";
        $option1data[2] = $pdo->query($selector[2]['option'])->fetchAll();
        $selecount = 3;
        $k = 0;
    }
    if ($tableid == '06ssd') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 06ssd GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '容量';
        $selector[1]['option'] = "SELECT capacity FROM 06ssd GROUP BY capacity";
        $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
        $selector[2]['name'] = '碟盤尺寸(吋)';
        $selector[2]['option'] = "SELECT disk_size FROM 06ssd GROUP BY disk_size";
        $option1data[2] = $pdo->query($selector[2]['option'])->fetchAll();
        $selecount = 3;
        $k = 0;
    }
    if ($tableid == '03vga') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 03vga GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '系列';
        $selector[1]['option'] = "SELECT series FROM 03vga GROUP BY series";
        $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
        $selecount = 2;
        $k = 0;
    }
    if ($tableid == '07computercase') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 07computercase GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '適用主機板';
        $selector[1]['option'] = "SELECT applicable_motherboard FROM 07computercase GROUP BY applicable_motherboard";
        $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
        $selector[2]['name'] = '顏色';
        $selector[2]['option'] = "SELECT color FROM 07computercase GROUP BY color";
        $option1data[2] = $pdo->query($selector[2]['option'])->fetchAll();
        $selecount = 3;
        $k = 0;
    }
    if ($tableid == '08powersupply') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 08powersupply GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '80plus認證';
        $selector[1]['option'] = "SELECT 80plus_certification FROM 08powersupply GROUP BY 80plus_certification";
        $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
        $selecount = 2;
        $k = 0;
    }
    if ($tableid == '12fan') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 12fan GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selecount = 1;
        $k = 0;
    }
    if ($tableid == '09screen') {
        $selector[0]['name'] = '品牌';
        $selector[0]['option'] = "SELECT brand FROM 09screen GROUP BY brand";
        $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
        $selector[1]['name'] = '面板類型';
        $selector[1]['option'] = "SELECT panel_type FROM 09screen GROUP BY panel_type";
        $option1data[1] = $pdo->query($selector[0]['option'])->fetchAll();
        $selecount = 1;
        $k = 0;
    }

    //取得cpu表格有資料欄位
    $itemrow = "SELECT * FROM $tableid";
    $rowfetch = $pdo->prepare($itemrow)->fetchAll();

    // 分類
    $qs = [];
    $where = ' WHERE 1 ';

    // 取得總筆數, 總頁數, 該頁的商品資料
    $perPage = 12; // 每一頁有幾筆
    // 用戶要看第幾頁的商品
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

    $t_sql = "SELECT COUNT(id) FROM $tableid";
    $totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
    $totalPages = ceil($totalRows / $perPage);

    if ($page < 1) $page = 1;
    if ($page > $totalPages) $page = $totalPages;

    $p_sql = sprintf("SELECT * FROM $tableid $where LIMIT %s, %s ", ($page - 1) * $perPage, $perPage);

    $rows = $pdo->query($p_sql)->fetchAll();

    ?>


    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!--固定元件:UMA小幫手style-->
    <link rel="stylesheet" href="/Upick/css/style_fixed_element.css">

    <!--item style-->
    <link rel="stylesheet" href="/Upick/css/style_item.css">
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


    <div class="aniContainerOut-CL">
        <!--商場區首頁-->
        <div class="shpTop-CL">
            <section id="shpTopSection_CL"></section>
            <!--商場頂部預留200px給navbar-->
            <div class="shpTopSpace-CL"></div>
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
                            <img src="/Upick/images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Upick/images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Upick/images/topCaro_01.png" class="d-block w-100" alt="...">
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
                    <h1>主機板 / CPU</h1>
                </div>

                <!--面包屑-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fas fa-map-marker-alt"></i>
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
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
                                    <div class="col">
                                        <a href="">
                                            <img class="itemShopCaroImg_CL" src="/Upick/images/item_01.png" alt="">
                                            <p class="itemShopCaroName_CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL itemShopCaroDollor_CL">8790</span></div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <img src="/Upick/images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                    <div class="col">
                                        <img src="/Upick/images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                    <div class="col">
                                        <img src="/Upick/images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">

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

                <!--零件篩選區-->
                <div class="itemFilter-CL">
                    <div class="itemFilterClear-CL">
                        <button>篩選項目</button>
                        <button>篩選項目</button>
                        <button>篩選項目</button>
                    </div>
                    <table class="table">
                        <tbody>
                            <?php for ($i = 0; $i < $selecount; $i++) { ?>
                                <tr>
                                    <th scope="row" calss="itemTh-CL"><?= $selector[$i]['name'] ?></th>
                                    <td>
                                        <?php foreach ($option1data[$i] as $key2 => $value2) { ?>
                                            <div>
                                                <?php
                                                foreach ($value2 as $v3) {
                                                    $k++; ?>
                                                    <input type="checkbox" id="inlineCheckbox<?= $k ?>" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox<?= $k ?>"><?= $v3 ?></label>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>


                        </tbody>
                    </table>

                    <!--篩選區收合btn-->
                    <div class="itemCollapse-CL">
                        <p>點擊以收合或開啟</p>
                    </div>
                </div>


                <!--手機版-零件篩選-->
                <div class="itemFilterPhone-CL">
                    <h4>請選擇商品篩選條件</h3>
                        <ul>核心數(cores(INT)) <i class="fas  fa-chevron-up"></i>
                            <li>2 core</li>
                            <li>4 core</li>
                            <li>6 core</li>
                            <li>8 core</li>
                            <li>10 core</li>
                            <li>12 core</li>
                            <li>16 core</li>
                        </ul>
                        <ul>型號model(VARCHAR) <i class="fas fa-chevron-up"></i>
                            <li>AMD</li>
                            <li>i3</li>
                            <li>i5</li>
                            <li>i7</li>
                            <li>i9</li>
                        </ul>
                        <ul>品牌 <i class="fas fa-chevron-up"></i>
                            <li>AMD</li>
                            <li>Intel</li>
                        </ul>
                </div>



                <!--排序按鈕-->
                <div class="itemSort-CL">
                    <button>最新上架</button>
                    <button>價格 <i class="fas fa-chevron-up"></i></button>
                    <button>銷量</button>
                    <button class="itemCount-CL">79</button>
                </div>

                <!--CPU零件區-->
                <section id="shpCpuSection_CL"></section>
                <div class="shpItem-CL shpCpu-CL">

                    <div class="row">
                        <?php foreach ($rows as $r) : ?>

                            <div class="col-xl col-6">
                                <a href="dtl_page.php?classid=<?= $tableid ?>&pid=<?= $r['sid'] ?>" data-sid="<?= $r['sid'] ?>">
                                    <img class="itemShowImg_CL" src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                                    <p class="itemShowName_CL"><?= $r['name'] ?></p>
                                    <!--加入追蹤之愛心,購物車,金額-->
                                    <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>






                </div>


                <!--頁碼-->
                <ul class="wWhitePgArea itemPage-CL">
                    <!--最前頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-double-left"></i></a>
                    </li>
                    <!--前一頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-left"></i></a></li>


                    <!--橫向顯示頁碼-->
                    <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
                        if ($i >= 1 and $i <= $totalPages) :
                            $qs['page'] = $i;
                    ?>
                            <!--頁數號碼-->
                            <li class="wWhitePgItem wWhitePGnumber <?= $i == $page ? 'wWhitePgColor' : '' ?>"><a class="wWhitePgLink" href="?classid=<?= $tableid ?>&<?= http_build_query($qs) ?>"><?= $i ?></a></li>

                        <?php endif; ?>
                    <?php endfor; ?>


                    <!--橫向顯示頁碼終止-->
                    <!--下一頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-right"></i></a></li>
                    <!--最後一頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-double-right"></i></a>
                    </li>

                </ul>

                <!--區隔撐開頁尾的空間-->
                <div class="shpFooterSpace-CL"></div>

            </div>
            <!--頁尾-->
            <?php include __DIR__ . '/../../parts/html_footer.php' ?>

        </div>
    </div>



    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
    <script>
        //開啟商品細節頁
        const openDtlPgBtn = $('.itemShowImg_CL');
        openDtlPgBtn.click(function() {
            const card = $(this).closest('a');
            const cardid = card.attr('data-sid');
            console.log('cardid is ', cardid);

            $.get('dtl_api.php', {
                action: 'list',
                cardid
            }, function(data) {
                console.log(data);
            }, 'json');

        })




        //網頁初始元件呈現
        $(document).ready(function() {
            //手機版-小於1200則searchbar不出現
            if ($(window).width() < 1200) {
                $('.navSearch-CL').css('display', 'none');
                //熱銷商品標題不出現
                $('.shpHotSaleTitle-CL').css('display', 'none');
                //手機版-出現手機版篩選功能
                $('.itemFilterPhone-CL').css('display', 'block');

            }
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
                //WEB版不出現手機版篩選功能
                $('.itemFilterPhone-CL').css('display', 'none');

                //searhBar分類區CPU按鈕在初始畫面效果
                $('.navSearchText-CL').eq(2).css('marginTop', '0px');
                $('.navSearchColor-CL').eq(2).css('width', '120%').css('opacity', '1');
                $('.navSearchColor-CL').eq(2).siblings().children('.navSearchColor-CL').css('width', '0%').css('opacity', '0.2');
            }
        })

        //排序按鈕btn click效果
        $('.itemSort-CL button').click(function() {
            $(this).css('boxShadow', 'inset 1px 1px 2px gray').siblings().css('boxShadow', 'none');
        })
        $('.itemCount-CL').click(function() {
            $(this).css('boxShadow', 'inset 1px 1px 3px #000');
        })

        //手機版-固定元件出現時機
        if ($(window).width() < 1200) {
            //umahelper在手機版時不出現
            $('.umaHelper-CL').css('display', 'none');
            $('.umaConvert-CL').css('display', 'none');
        }
        //WEB版-固定元件出現時機
        if ($(window).width() >= 1200) {
            $(window).scroll(function() {
                var mouseScroll = $(window).scrollTop();
                var itemCaroTop = $('.shpCarouselOut-CL').offset().top;
                //siteBtn在一開始不出現,當mouse scroll超過輪播牆才出現
                if (mouseScroll > itemCaroTop) {
                    console.log(`itemCaroTop`, itemCaroTop);
                    $('.siteBtn-CL').css('transform', 'translateY(0vh)');
                } else {
                    $('.siteBtn-CL').css('transform', 'translateY(150vh)');
                }


                //umahelper在超過輪播牆時出現,超過商品區第一列時消失
                var itemTop = $('.shpItem-CL').offset().top;
                if ((mouseScroll > itemCaroTop) && (mouseScroll < itemTop)) {
                    console.log('hi already');
                    $('.umaHelper-CL').css('display', 'block');
                    $('.umaConvert-CL').css('display', 'block');
                }
                if ((mouseScroll >= itemTop) || (mouseScroll <= itemCaroTop)) {
                    console.log('hi not yat');
                    $('.umaHelper-CL').css('display', 'none');
                    $('.umaConvert-CL').css('display', 'none');
                }
            })
        }



        //點選零件篩選區收合btn,則收合至只剩下已選擇之篩選項目
        let uP = 0;
        $('.itemCollapse-CL').click(function() {
            $('.itemFilterBrandImg-CL').toggle();
            $('.itemFilter-CL table').toggle();
        })


        //siteBtn按鈕選擇效果
        $('.siteBtnInner-CL').click(function() {
            $(this).css('backgroundColor', '#383E44').children('p').css('color', '#ffffff');
            $(this).parent('.sitBtnGo-CL').siblings().children('.siteBtnInner-CL').css('backgroundColor', '#ffffff')
                .children('p').css('color', '#383E44');
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

        //手機版-篩選功能
        $('.fa-chevron-up').toggle();
        $('.itemFilterPhone-CL ul').click(function() {
            $(this).children('i.fa-chevron-up').toggle();
            $(this).children('li').toggle(function() {
                $('.itemFilterPhone-CL li').click(function() {
                    $(this).css('display', 'block').siblings().css('display', 'none');
                    return false;
                })
            });
        })
    </script>



</body>

</html>