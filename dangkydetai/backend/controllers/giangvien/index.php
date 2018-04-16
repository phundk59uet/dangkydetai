<?php
//load model
require_once('backend/models/giangvien.php');
if (isset($_POST['id'])) {
	foreach ($_POST['id'] as $id) {
		$id = intval($id);
		giangvien_delete($id);
	}
}

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;
$url = 'admin.php?controller=giangvien';

//load danh sách giảng viên
$title = 'Danh sách giảng viên';
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
    $total_rows = get_total('giangvien', $options);
    $total = ceil($total_rows/$limit);
    $giangvien = get_all('giangvien', $options);
$pagination = pagination($url, $page, $total);

//load view
require('backend/views/giangvien/index.php');