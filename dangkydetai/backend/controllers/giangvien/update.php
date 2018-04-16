<?php
// duy?t d? tài c?a sinh viên
require_once('backend/models/giangvien.php');
$user = $_SESSION['user'];
$id = intval($_GET['id']);
$gv_id = $user['id'];
duyet_update($id,$gv_id);

header('location:admin.php?controller=giangvien&action=listing');