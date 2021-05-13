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
    <link rel="stylesheet" href="/Upick/css/upick-phone.css" type="text/css"
        media="only screen and (min-width: 0px) and (max-width: 767px)" />
    <style>

    </style>
</head>


<body>
    <!--navbar-->
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>

    <div class="container up-container">
        <div class="row ">

            <!-- 表格 -->
            <div class="up-table-frame col-lg-8">
                <table class="up-table">
                    <thead class="up-table-title-fixed">
                        <tr class="up-table-title">
                            <th scope=col class="item">品項</th>
                            <td scope="col" class="brand">品牌</td>
                            <td scope="col" class="item">商品名稱</td>
                            <td scope="col" class="itemprice">單價</td>
                            <td scope="col" class="amount">數量</td>
                            <td scope="col" class="sub">小計</td>
                            <td scope="col"></td>
                        </tr>
                    </thead>
                    <!-- 主題機 -->
                    <tbody>
                        <tr>
                            <th scope="row" class="item">主題機
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>
                        </tr>
                    </tbody>
                    <!-- 電腦零組件 -->
                    <thead>
                        <tr class="up-table-subtitle">
                            <th scope="row" class="product">電腦零組件</th>
                            <td class="brand"></td>
                            <td class="item"></td>
                            <td class="itemprice"></td>
                            <td class="amount"></td>
                            <td class="sub"></td>
                            <td class="add"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- CPU -->
                        <tr>
                            <th scope="row" class="product">中央處理器 CPU
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>
                        </tr>
                        <!-- MB -->
                        <tr>
                            <th scope="row" class="product">主機板 MB
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- RAM -->
                        <tr>
                            <th scope="row" class="product">記憶體 RAM
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- SSD -->
                        <tr>
                            <th scope="row" class="product">固態硬碟 SSD
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- VGA -->
                        <tr>
                            <th scope="row" class="product">顯示卡 VGA
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- POWER -->
                        <tr>
                            <th scope="row" class="product">電源供應器 POWER
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- CASE -->
                        <tr>
                            <th scope="row" class="product">電腦機殼 CASE
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <tr>
                            <th scope="row" class="product">鍵盤 / 滑鼠
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                    </tbody>
                    <!-- 散熱模組 -->
                    <thead>
                        <tr class="up-table-subtitle">
                            <th scope="row" class="product">散熱模組</th>
                            <td class="brand"></td>
                            <td class="item"></td>
                            <td class="itemprice"></td>
                            <td class="amount"></td>
                            <td class="sub"></td>
                            <td class="add"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 散熱器 -->
                        <tr>
                            <th scope="row" class="product">散熱器
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- 散熱膏 -->
                        <tr>
                            <th scope="row" class="product">散熱膏
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- 水冷 -->
                        <tr>
                            <th scope="row" class="product">水冷
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                    </tbody>
                    <!-- 周邊零件 -->
                    <thead>
                        <tr class="up-table-subtitle">
                            <th scope="row" class="product">周邊零件</th>
                            <td class="brand"></td>
                            <td class="item"></td>
                            <td class="itemprice"></td>
                            <td class="amount"></td>
                            <td class="sub"></td>
                            <td class="add"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 外接硬碟 -->
                        <tr>
                            <th scope="row" class="product">外接硬碟
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- 隨身硬碟 -->
                        <tr>
                            <th scope="row" class="product">隨身碟 USB
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>

                        </tr>
                        <!-- 記憶卡 -->
                        <tr>
                            <th scope="row" class="product">記憶卡
                            </th>
                            <!-- 選擇品牌下拉 -->
                            <td class="brand">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇品牌
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 選擇商品下拉 -->
                            <td class="item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm "
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        請選擇商品
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </td>
                            <!-- 商品單價 -->
                            <td class="itemprice">＄0</td>
                            <!-- 選擇商品數量 -->
                            <td class="amount">
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false">
                                    數量
                                </button>
                            </td>
                            <!-- 小計 -->
                            <td class="sub price">$0</td>
                            <!-- 新增 -->
                            <td class="add"><i class="fas fa-plus-circle "></i></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- 表單 -->
            <div class="col-lg-4 up-card">
                <div class="d-flex ">
                    <div class="d-flexalign-items-start justify-content-between">
                        <h5>商品清單</h5>
                        <a href="">
                            <h5>清空</h5>
                        </a>
                    </div>

                    <h5 class="price align-self-end">$10000</h5>
                </div>

                <ul id="menu" class="list-group ">
                    <li class="list-group-item d-flex">
                        <p class="col-9 my-auto">AMD Athlon™ 3000G</p>

                        <h5 class="price col-3 my-auto">$1000</h5>
                    </li>
                    <li class="list-group-item d-flex">
                        <p class="col-9 my-auto">HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>

                        <h5 class="price col-3 my-auto">$1000</h5>
                    </li>

                </ul>
                <div class="card-body ">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        </div>

    </div>



    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
    <script>
    $(document).on('click', '.add', function() {
        console.log('hi')
        $("#menu").append(
            '<li class="list-group-item d-flex"><p class= "col-9 my-auto" > HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2 / 16 </p><h5 class="price col-3 my-auto">$1000</h5></li >'
        );
    })
    </script>
</body>

</html>