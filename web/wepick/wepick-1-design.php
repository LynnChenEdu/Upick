<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>

    <!-- google font 'Freckle Face', cursive-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Freckle+Face&display=swap" rel="stylesheet">


    <!-- wp-1.css -->
    <link rel="stylesheet" href="/Upick/css/wp-1.css">
    <!-- style -->
    <style>
    .wp-button:hover {
        background-color: #FF98C9;
    }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="wpNavSpace-CL"></div>

    <div class="row col-sm-12 justify-content-center mx-auto container">
        <div class="wp-bg wp-design d-none d-sm-block">
            <span>design</span>
            <img src="/Upick/images/wpimg/icon/design.svg" alt="">
        </div>
        <div class="text-center wp-design wp-index">
            <div class="wp-img">
                <img src="/Upick/images/wpimg/design.svg" alt="">
            </div>
            <h2 class="wp-design ">
                繪圖設計
            </h2>
            <div class="mx-auto wp-design wp-button-group">
                <button class="wp-button wp-design">一鍵組機</button>
                <a href="/Upick/web/wepick/wepick-2.php"><button class="wp-button wp-design">自選品牌</button></a>
            </div>
        </div>

    </div>


    <?php include __DIR__ . '/../../parts/scripts.php' ?>
</body>

</html>