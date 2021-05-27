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


</body>

</html>