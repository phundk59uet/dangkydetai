<?php
// c?p nh?t dang k� d? t�i c?a sinh vi�n
require_once('backend/models/sinhvien.php');
$user = $_SESSION['user'];
$id = intval($_GET['id']);
$gv_id = intval($_GET['gv_id']);
dangky_update($id,$gv_id);

header('location:admin.php?controller=sinhvien&action=detai');