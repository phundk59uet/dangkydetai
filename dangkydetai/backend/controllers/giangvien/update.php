<?php
// duy?t d? t�i c?a sinh vi�n
require_once('backend/models/giangvien.php');
$user = $_SESSION['user'];
$id = intval($_GET['id']);
$gv_id = $user['id'];
duyet_update($id,$gv_id);

header('location:admin.php?controller=giangvien&action=listing');