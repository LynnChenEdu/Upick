<?php
$tableid = isset($_GET['classid']) ? ($_GET['classid']) : '';

//若點擊navbar商場btn,則navsearch要出現
$shparea = isset($_GET['shparea']) ? ($_GET['shparea']) : '';
if ($shparea == 'block') {
    $opacity = '1';
}

$search2 = "&classid=$tableid";
?>


<div class="navbarAll">
    <nav class="navbar navbar-expand-lg navbar-upick">
        <div class="upick-navbar-container row">
            <!-- logo -->
            <a class="navbar-brand" href="#"> <img src="/Upick/icon/logo-w.svg" alt="UPick" height="30" width="30"></a>
            <!-- 三明治按鈕 -->
            <button class="navbar-toggler navbar-toggler-upick" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- 左邊的 三明治收合的內容 -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item up-nav-left">
                        <a class="nav-link navHome-CL" href="/Upick/shopHome.php">首頁</a>
                    </li>
                    <li class="nav-item up-nav-left">
                        <a class="nav-link " href="/Upick/shopHome.php?aniarea=none&shparea=block">商場</a>
                    </li>
                    <li class="nav-item up-nav-left">
                        <a class="nav-link" href="/Upick/web/wepick/wepick-0.php">WePick</a>
                    </li>
                    <li class="nav-item up-nav-left">
                        <a class="nav-link" href="/Upick/web/upick/upick-0.php">UPick</a>
                    </li>
                </ul>
            </div>
            <!-- 右邊的 保留icon就好 -->
            <form class="form-inline my-2 my-lg-0 navbar-expand-lg">
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION['loginUser'])) : ?>
                        <!-- 已登入 -->
                        <li class="nav-item up-nav-right">
                            <a class="nav-link nav-follow-CL" href="/Upick/web/member/memberFollow.php"><i class="fas fa-heart"></i> 追蹤清單</a>
                        </li>
                        <li class="nav-item up-nav-right <?= $pageName == 'cart' ? 'active' : '' ?>">
                            <a class="nav-link" href="/Upick/web/shopcar/shopcart_origin.php"><i class="fas fa-shopping-cart "></i> 購物車
                                <span class="badge badge-pill badge-danger cart-count" style="display:none;">0</span>
                            </a>
                        </li>
                        <li class="nav-item up-nav-righ">
                            <a class="nav-link" href="/Upick/web/member/memberCentre.php"><i class="fas fa-user"></i> 會員中心
                            </a>
                        </li>
                        <li class="nav-item up-nav-right">
                            <a class="nav-link" href="#">
                                <i class="fas fa-search"></i> 搜尋
                            </a>
                        </li>
                        <a class="loginBtn_HC wBtnNav my-2 my-sm-0" href="logout.php" type="submit">登出</a>

                    <?php else : ?>
                        <!-- 未登入 -->
                        <li class="nav-item up-nav-right">
                            <a class="nav-link nav-follow-CL" href="/Upick/web/member/login.php"><i class="fas fa-heart"></i> 追蹤清單</a>
                        </li>
                        <li class="nav-item up-nav-right <?= $pageName == 'cart' ? 'active' : '' ?>">
                            <a class="nav-link" href="/Upick/web/member/login.php"><i class="fas fa-shopping-cart "></i> 購物車
                                <span class="badge badge-pill badge-danger cart-count" style="display:none;">0</span>
                            </a>
                        </li>


                        <li class="nav-item up-nav-right">
                            <a class="nav-link" href="/Upick/web/member/login.php"><i class="fas fa-user"></i> 會員中心
                            </a>
                        </li>
                        <li class="nav-item up-nav-right">
                            <a class="nav-link" href="#">
                                <i class="fas fa-search"></i> 搜尋
                            </a>
                        </li>
                        <a class="loginBtn_HC wBtnNav my-2 my-sm-0" href="/Upick/web/member/login.php" type="submit">登入 / 註冊</a>
                    <?php endif; ?>
                </ul>
            </form>
        </div>
    </nav>

    <!-- 彩虹條 -->
    <div class="colorspace"></div>

    <!--白色搜尋bar區-->
    <div class="navSearch-CL" style="display:<?= $shparea ?>; transform: translateY(0vh); opacity:<?= $opacity ?>;">
        <!--搜尋輸入框-->
        <form class="wSearchInput" action="item_page.php?" method="">
            <!--文字輸入框-->
            <input id="wSearchText-CL" class="wSearchInputBox wInputShare" type="search" placeholder="Search" name="search" value="" aria-label="Search">
            <!--隱藏欄位-->
            <input type="hidden" name="classid" value="<?= $tableid ?>">
            <!--搜尋按鈕-->
            <button class="wSearcBtn" type="submit"><i class="fas fa-search"></i> 分類搜尋</button>
        </form>
        <div class="navSearchClass-CL">
            <div class="navSearchText-CL">
                <div class="navSearchColor-CL"></div>
                <span>精選熱銷</span>
            </div>
            <div class="navSearchText-CL">
                <div class="navSearchColor-CL"></div>
                <span>主題機</span>
            </div>
            <a href="/Upick/web/product/item_page.php?classid=01cpu">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '01cpu') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">CPU</span>

                </div>
            </a>
            <a href="/Upick/web/product/item_page.php?classid=02mb">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '02mb') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">主機板</span>
                </div>
            </a>
            <a href="/UPICK/web/product/item_page.php?classid=04ram">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '04ram') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">記憶體</span>
                </div>
            </a>
            <a href="/UPICK/web/product/item_page.php?classid=05hdd">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '05hdd') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">傳統硬碟</span>
                </div>
            </a>
            <a href="/UPICK/web/product/item_page.php?classid=06ssd">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '06ssd') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">固態硬碟</span>
                </div>
            </a>
            <a href="/UPICK/web/product/item_page.php?classid=03vga">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '03vga') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">顯示卡</span>
                </div>
            </a>
            <a href="/UPICK/web/product/item_page.php?classid=07computercase">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '07computercase') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">電腦機殼</span>
                </div>
            </a>
            <a href="/UPICK/web/product/item_page.php?classid=08powersupply">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '08powersupply') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">電源供應器</span>
                </div>
            </a>
            <a href="/UPICK/web/product/item_page.php?classid=12fan">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '12fan') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">散熱模組</span>
                </div>
            </a>
            <a href="/UPICK/web/product/item_page.php?classid=09screen">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span class="navBtnBg<?php if ($tableid == '09screen') {
                                                echo $tableid;
                                            } else {
                                                echo '';
                                            } ?>-CL">週邊產品</span>
                </div>
            </a>
        </div>
    </div>
</div>

<!--SCRIPT-->
<?php include __DIR__ . '/../parts/scripts.php' ?>
<script>
    $('.navSearchText-CL').mouseover(function() {
        $(this).css('marginTop', '-5px').css('transition', '0.2s').siblings().css('marginTop', '0px');

        $(this).mouseout(function() {
            $(this).css('marginTop', '0px');
        })
    })
</script>