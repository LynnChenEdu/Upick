<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

//取得cpu品牌名稱
$cpu1 = "SELECT `brand` FROM 01cpu GROUP BY brand";
$stmt1 = $pdo->query($cpu1);
$row1 = $stmt1->fetchall();

//取得主機板品牌名稱
$mb1 = "SELECT `brand` FROM 02mb GROUP BY brand";
$stmt2 = $pdo->query($mb1);
$row2 = $stmt2->fetchall();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>

    <!-- up style -->
    <link rel="stylesheet" href="/Upick/css/up-color.css">
    <link rel="stylesheet" href="/Upick/css/upick-web.css">
    <link rel="stylesheet" href="/Upick/css/upick-phone.css" type="text/css" media="only screen and (min-width: 0px) and (max-width: 767px)" />
    <style>

    </style>
</head>


<body>
    <!--navbar-->
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container up-container d-flex">
        <!-- 商品表格 -->
        <div class="col-lg-8 col-sm-12 up-table-frame ">
            <!-- title -->
            <div class="up-table-title row">
                <div class="col-2 item">品項</div>
                <div class="col-2 brand">品牌</div>
                <div class="col-4 productname">商品名稱</div>
                <div class="col itemprice">單價</div>
                <div class="col amount">數量</div>
                <div class="col sub">小計</div>
                <div class="col add"></div>
            </div>
            <!-- 主題機 -->
            <div class="up-table row">
                <div class="col-2 item">主題機</div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>數量</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- subtitle -->
            <div class="up-table-subtitle row">
                <div class="col-12 item">電腦零組件</div>
            </div>
            <!-- CPU -->
            <div class="up-table row">
                <div class="col-2 item">中央處理器</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row1 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add" id="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 主機板 MB -->
            <div class="up-table row">
                <div class="col-2 item">主機板 MB</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row2 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>

                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 記憶體 RAM -->
            <div class="up-table row">
                <div class="col-2 item">記憶體 RAM</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 固態硬碟 SSD -->
            <div class="up-table row">
                <div class="col-2 item">固態硬碟 SSD</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 顯示卡 VGA -->
            <div class="up-table row">
                <div class="col-2 item">顯示卡 VGA</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 電源供應器 -->
            <div class="up-table row">
                <div class="col-2 item">電源供應器</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 電腦機殼 CASE -->
            <div class="up-table row">
                <div class="col-2 item">電腦機殼 CASE</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 鍵盤 / 滑鼠 -->
            <div class="up-table row">
                <div class="col-2 item">鍵盤 / 滑鼠</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- subtitle -->
            <div class="up-table-subtitle row">
                <div class="col-12 item">散熱模組</div>
            </div>
            <!-- 散熱器 -->
            <div class="up-table row">
                <div class="col-2 item">散熱器</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 散熱膏 -->
            <div class="up-table row">
                <div class="col-2 item">散熱膏</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 水冷 -->
            <div class="up-table row">
                <div class="col-2 item">水冷</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- subtitle -->
            <div class="up-table-subtitle row">
                <div class="col-12 item">周邊零件</div>
            </div>
            <!-- 外接硬碟 -->
            <div class="up-table row">
                <div class="col-2 item">外接硬碟</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 隨身碟 USB -->
            <div class="up-table row">
                <div class="col-2 item">隨身碟 USB</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 記憶卡 -->
            <div class="up-table row">
                <div class="col-2 item">記憶卡</div>
                <div class="col-2 brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-4 productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col itemprice">$0</div>
                <div class="col amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col sub price">$0</div>
                <div class="col add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>



        </div>
        <!-- 商品清單 -->
        <div class="col-lg-4 col-sm-12 up-card">
            <h5>商品清單</h5>
            <div id="upList" class="up-list-group">
                <div class=" list-group-item d-flex">
                    <div class="col-11">
                        <p class="my-auto "> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                        <div class="d-flex justify-content-between">
                            <form class="widget amount">
                                <select name="amount">
                                    <option>數量</option>
                                    <option>pro2</option>
                                    <option>pro3</option>
                                    <option>pro4</option>
                                    <option>pro5</option>
                                </select>
                                <div class="select">
                                    <span class="value"></span>
                                    <ul class="optList hidden">
                                        <li class="option">0</li>
                                        <li class="option">1</li>
                                        <li class="option">2</li>
                                        <li class="option">3</li>
                                        <li class="option">4</li>
                                        <li class="option">5</li>
                                    </ul>
                                </div>
                            </form>
                            <span class="price my-auto">$1000</span>
                        </div>
                    </div>
                    <div class="col-1 my-auto trashcan">
                        <i class=" fas fa-trash "></i>
                    </div>
                </div>

            </div>

            <div class="totalPrice d-flex justify-content-center">
                <h5>
                    總價
                    <span class="price">
                        $3000
                    </span>
                </h5>
            </div>
            <!-- 按鍵 -->
            <div class="d-flex justify-content-around">
                <a href="./upick-2-productlist.html"><button class="btn wp-button wBtnNGr">匯出清單</button>
                </a>
                <button class="btn wp-button wBtnNPk">結帳</button>
            </div>
        </div>
    </div>



    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        // 下拉選單
        NodeList.prototype.forEach = function(callback) {
            Array.prototype.forEach.call(this, callback);
        }

        function deactivateSelect(select) {
            if (!select.classList.contains('active')) return;

            var optList = select.querySelector('.optList');

            optList.classList.add('hidden');
            select.classList.remove('active');
        }

        function activeSelect(select, selectList) {
            if (select.classList.contains('active')) return;

            selectList.forEach(deactivateSelect);
            select.classList.add('active');
        };

        function toggleOptList(select, show) {
            var optList = select.querySelector('.optList');

            optList.classList.toggle('hidden');
        }

        function highlightOption(select, option) {
            var optionList = select.querySelectorAll('.option');

            optionList.forEach(function(other) {
                other.classList.remove('highlight');
            });

            option.classList.add('highlight');
        };

        function updateValue(select, index) {
            var nativeWidget = select.previousElementSibling;
            var value = select.querySelector('.value');
            var optionList = select.querySelectorAll('.option');

            nativeWidget.selectedIndex = index;
            value.innerHTML = optionList[index].innerHTML;
            highlightOption(select, optionList[index]);
        };

        function getIndex(select) {
            var nativeWidget = select.previousElementSibling;

            return nativeWidget.selectedIndex;
        };

        window.addEventListener("load", function() {
            var form = document.querySelector('form');

            form.classList.remove("no-widget");
            form.classList.add("widget");
        });

        window.addEventListener('load', function() {
            var selectList = document.querySelectorAll('.select');

            selectList.forEach(function(select) {
                var optionList = select.querySelectorAll('.option');

                optionList.forEach(function(option) {
                    option.addEventListener('mouseover', function() {
                        highlightOption(select, option);
                    });
                });

                select.addEventListener('click', function(event) {
                    toggleOptList(select);
                });

                select.addEventListener('focus', function(event) {
                    activeSelect(select, selectList);
                });

                select.addEventListener('blur', function(event) {
                    deactivateSelect(select);
                });
            });
        });

        window.addEventListener('load', function() {
            var selectList = document.querySelectorAll('.select');

            selectList.forEach(function(select) {
                var optionList = select.querySelectorAll('.option'),
                    selectedIndex = getIndex(select);

                select.tabIndex = 0;
                select.previousElementSibling.tabIndex = -1;

                updateValue(select, selectedIndex);

                optionList.forEach(function(option, index) {
                    option.addEventListener('click', function(event) {
                        updateValue(select, index);
                    });
                });

                select.addEventListener('keyup', function(event) {
                    var length = optionList.length,
                        index = getIndex(select);

                    if (event.keyCode === 27) {
                        deactivateSelect(select);
                    }
                    if (event.keyCode === 40 && index < length - 1) {
                        index++;
                    }
                    if (event.keyCode === 38 && index > 0) {
                        index--;
                    }

                    updateValue(select, index);
                });
            });
        });


        // 新增

        $(document).on('click', '.add', function() {
            console.log('hi')
            $("#upList").append('<div class=" list-group-item d-flex"><div class="col-11"><p class="my-auto "> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p><div class="d-flex justify-content-between"><form class="widget amount"><select name="amount"><option>數量</option><option>pro2</option><option>pro3</option><option>pro4</option><option>pro5</option></select><div class="select"><span class="value"></span><ul class="optList hidden"><li class="option">0</li><li class="option">1</li><li class="option">2</li><li class="option">3</li><li class="option">4</li><li class="option">5</li></ul></div></form><span class="price my-auto">$1000</span></div></div><div class="col-1 my-auto trashcan"><i class=" fas fa-trash "></i></div></div></div>');
        })
        // var upList = document.getElementById('upList');
        // var newList = document.createElement('div');
        // var textNode = document.createTextNode("Hello");
        // newList.appendChild(textNode);
        // upList.appendChild(newList);

        $(document).on('click', '.trashcan', function() {
            console.log('remove')
            $(this).parent().remove()
        })
    </script>
</body>

</html>