<?php
//load model
require_once('backend/models/giangvien.php');
// th?c hi?n x�a gi?ng vi�n
$id = intval($_GET['id']);
giangvien_delete($id);

header('location:admin.php?controller=giangvien');