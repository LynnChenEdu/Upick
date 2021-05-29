<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$linkitem = isset($_GET['linkid']) ? ($_GET['linkid']) : '';

$_SESSION['array'] = $_SESSION['array'] . 'linkid=' . $linkitem . '&';

echo $_SESSION['array'];
echo '<br>';
echo $_SESSION['array'];

if ($linkitem == 'clear') {
    session_destroy();
}



$optionkey = isset($_GET['optionkey']) ? ($_GET['optionkey']) : '';
$optionvalue = isset($_GET['optionvalue']) ? ($_GET['optionvalue']) : '';
$optiontext = "$optionkey" . '=' . $optionvalue;


$t_sql = "SELECT COUNT(id) FROM $tableid WHERE ?=?";
$totalRows2 = $pdo->prepare($t_sql);
$totalRows2->bindParam(1, $getoptionkey, PDO::PARAM_STR);
$totalRows2->bindParam(2, $getoptionvalue, PDO::PARAM_STR);

$totalRows2->execute();
$totalRows = $totalRows2->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage);



?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a {
            display: block;
            font-size: 20px;
            margin: 10px;
        }
    </style>
</head>

<body>

    <a href="test.php?<?= $_SESSION['array']; ?>linkid=001">link1</a>
    <a href="test.php?<?= $_SESSION['array']; ?>linkid=002">link2</a>

    <a href="test.php?linkid=clear">clear</a>


    <script>
        //取得篩選項目文字
        $(document).ready(function() {
            let searchURL = window.location.search.substring(1);
            console.log('search：', searchURL);

            var optionitem = [searchURL, '&'];
            if (!sessionStorage.getItem('optionitem')) {
                $('.itemFilter-CL table td label').click(function() {
                    $optiontext = $(this).text();
                    $optionkey = $(this).attr('data-key');
                    $optioncontent = $optionkey + `=` + $optiontext;
                    optionitem.push($optioncontent);
                    optionitem2 = optionitem.join('&');
                    sessionStorage.setItem('optionitem', optionitem2);

                    window.location.href = `http://localhost/Upick/web/product/item_page.php?` + optionitem2;

                })
            } else {
                var optionitem = [sessionStorage.getItem('optionitem')];
                $('.itemFilter-CL table td label').click(function() {
                    $optiontext = $(this).text();
                    $optionkey = $(this).attr('data-key');
                    $optioncontent = $optionkey + `=` + $optiontext;
                    optionitem.push($optioncontent);
                    optionitem2 = optionitem.join('&');
                    sessionStorage.setItem('optionitem', optionitem2);

                    window.location.href = `http://localhost/Upick/web/product/item_page.php?` + optionitem2;
                })
            }
        })

        $('.navSearchText-CL').click(function() {
            sessionStorage.removeItem('optionitem');
        })
    </script>


</body>



</html>