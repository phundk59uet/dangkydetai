<?php
// c?p nh?t dang ký d? tài c?a sinh viên
require_once('backend/models/sinhvien.php');
$user = $_SESSION['user'];
$id = intval($_GET['id']);
$gv_id = intval($_GET['gv_id']);
dangky_update($id,$gv_id);

header('location:admin.php?controller=sinhvien&action=detai');