<?php
//load model
require_once('backend/models/sinhvien.php');
$id = intval($_GET['id']);
sinhvien_delete($id);

header('location:admin.php?controller=sinhvien');