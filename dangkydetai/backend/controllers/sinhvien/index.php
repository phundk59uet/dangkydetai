<?php
//load model
require_once('backend/models/sinhvien.php');


if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;
$url = 'admin.php?controller=sinhvien';

//data
$title = 'Danh sách sinh viên';
$user = $_SESSION['user'];
    if ($user['role'] == 3){
    $options = array(
        'limit' => $limit,
        'offset' => $offset,
        'order_by' => 'id ASC'
    );
    }
    else {
      $options = array(
        'where' => "loginname='".$user['loginname']."'",
        'limit' => $limit,
        'offset' => $offset,
        'order_by' => 'id ASC'
    );  
    }
    $total_rows = get_total('sinhvien', $options);
    $total = ceil($total_rows/$limit);
    $sinhvien = get_all('sinhvien', $options);
    $pagination = pagination($url, $page, $total);

//load view
require('backend/views/sinhvien/index.php');