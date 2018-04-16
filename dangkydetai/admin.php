﻿<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once('config.php');
require_once('libraries/functions.php');
require_once('libraries/generate_form.php');
require_once('backend/models/model.php');
//xử lý request từ trình duyệt và gọi controller / action tương ứng
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

//kiểm tra đăng nhập
if(!isset($_SESSION['user'])) {
    $controller = 'home';
    $action = 'login';
}
$file = 'backend/controllers/'.$controller.'/'.$action.'.php';
if (file_exists($file)) {
    require($file);
} else {
    show_404();
}

mysql_close($db);