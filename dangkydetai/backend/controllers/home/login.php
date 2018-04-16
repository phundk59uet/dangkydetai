<?php

//load model
require_once('backend/models/edit_account.php');

//xử lý
if (!empty($_POST)) {
    $adm_loginname = escape($_POST['adm_loginname']);
    $adm_password = $_POST['adm_password'];
    $adm_role = $_POST['adm_role'];
    user_login($adm_loginname, $adm_password, $adm_role);
}

if (isset($_SESSION['user'])) {
?>    
    <script language="javascript" type="text/javascript">
    window.location = "admin.php";
    </script>﻿
<?php
}
else echo "<script>alert('Thông tin đăng nhập không hợp lệ hoặc bạn đã đăng xuất khỏi hệ thống!');</script>";
//data
$title = 'Login system';

//load view
require('backend/views/home/login.php');
?>