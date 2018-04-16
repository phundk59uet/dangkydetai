<?php
//load model
require_once('backend/models/sinhvien.php');


if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;
$url = 'admin.php?controller=sinhvien';

//danh sách đề tài mà sinh viên đã đăng ký
$title = 'Danh sách đề tài bạn đã đăng ký';
$user = $_SESSION['user'];

      $options = array(
        "where" => "id=".$user['id'],
        'limit' => $limit,
        'offset' => $offset,
        'order_by' => 'id ASC'
    );  
    
    $total_rows = get_total('sinhvien', $options);
    $total = ceil($total_rows/$limit);
    $sinhvien = get_all('sinhvien', $options);
    $pagination = pagination($url, $page, $total);

//load view
require('backend/views/sinhvien/detai.php');