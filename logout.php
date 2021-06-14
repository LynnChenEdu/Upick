<?php

session_start();

unset($_SESSION['loginUser']);

header("Location: ./web/member/login.php");

// 首頁+商場 登出