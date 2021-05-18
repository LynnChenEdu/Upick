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
        .up-productlist {
            border: 1px solid #E4E8EE;
            border-radius: 4px;
            padding: 16px;
            /* background-color: #E4E8EE; */
            margin-left: 10px;
        }

        .up-productlist-title {
            color: #E4E8EE;
            text-align: center;
            border-bottom: 2px solid #ddd;
        }

        .up-productlist-product {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 5px 20px;
        }

        .up-productlist-product p {
            color: #E4E8EE;

        }

        .up-productlist-totleprice {
            color: #E4E8EE;
        }

        .wWhitePgAreaHTML9 {
            z-index: 10;
            position: absolute;
            top: 30%;
            left: 25%;
            /* display: none; */
        }

        .cover {
            background: #000;
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            filter: blur(2px);
            opacity: 0.5;
            /* display: none; */
            z-index: 2
        }

        .fa-copy {
            color: #383E44;
        }
    </style>
</head>


<body>
    <!--navbar-->
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container up-container">
    <!-- 分享頁面 -->
    <div class="wWhitePgAreaHTML9">
        <div class="wShareDark windowShare">
            <div class="wWinDarkClo"><i class="fas fa-times"></i></div>
            <h4>分享</h4>
            <div class="wShareMedia">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter-square"></i>
            </div>
            <div class="wShareArea">
                <!--網址要出現的區域-->
                <div class="wShareText"></div>
                <!--拷貝網址的按鈕-->
                <button class="wShareCopy"><i class="far fa-copy"></i></button>
            </div>
        </div>
    </div>
    <!-- <div class="cover"> -->
    <div>
        <div class="container up-container">
            <!-- 商品清單 -->
            <div class="up-productlist">
                <h5 class="up-productlist-title">商品清單</h5>
                <div class="up-productlist-product">
                    <p class="my-auto"> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                    <h5 class="price my-auto">$1000</h5>
                </div>
                <div class="up-productlist-product">
                    <p class="my-auto"> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                    <h5 class="price my-auto">$1000</h5>
                </div>
                <div class="up-productlist-product">
                    <p class="my-auto"> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                    <h5 class="price my-auto">$1000</h5>
                </div>
                <div class="up-productlist-product">
                    <p class="my-auto"> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                    <h5 class="price my-auto">$1000</h5>
                </div>
                <div class="up-productlist-product">
                    <p class="my-auto"> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                    <h5 class="price my-auto">$1000</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <h4 class="m-1 up-productlist-totleprice">
                        總價
                    </h4>
                    <h4 class="price m-1">
                        $3000
                    </h4>
                </div>
                <!-- 按鍵 -->
                <div class="d-flex justify-content-around">
                    <button class="btn wp-button wBtnNGr btn-share">分享清單</button>
                    <a href="">
                        <button class="btn wp-button wBtnNPk">結帳</button>
                    </a>

                </div>


            </div>
        </div>
    </div>


    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>

     $('.wWhitePgAreaHTML9').hide();

    $(document).ready(function () {
            $('.btn-share').click(function () {
                console.log('hi');
                $('.wWhitePgAreaHTML9').show();
                $('.up-container').parent().addClass('cover'); //顯示遮罩層

            });
            $('.wWinDarkClo').click(function () {
                $('.wWhitePgAreaHTML9').hide();
                console.log('hello');
                $('.up-container').parent().removeClass('cover');
            });
    });
      
    </script>
</body>

</html>