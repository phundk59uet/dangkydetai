<?php
//load model
require_once('backend/models/sinhvien.php');

//phân trang
if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;
$url = 'admin.php?controller=sinhvien';

//load data vào table
$title = 'Danh sách các đề tài được đăng ký';
$user = $_SESSION['user'];

      $options = array(
        'limit' => $limit,
        'offset' => $offset,
        'order_by' => 'id ASC'
    );  
    
    $total_rows = get_total('giangvien', $options);
    $total = ceil($total_rows/$limit);
    $giangvien = get_all('giangvien', $options);
    $pagination = pagination($url, $page, $total);

//load view
require('backend/views/sinhvien/listing.php');