<?php

session_start();

unset($_SESSION['loginUser']);

header('Location: ./UPICK/web/member/login.php');
