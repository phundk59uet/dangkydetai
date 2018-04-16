<?php
//load model
require_once('backend/models/giangvien.php');
$user = $_SESSION['user'];
//if form submit 
if (isset($_GET['id'])) $id = intval($_GET['id']); else $id=0;
//data
$title = ($id==0) ? 'Thêm thông tin giảng viên' : 'Sửa thông tin giảng viên';
$giangvien = get_a_record('giangvien', 'id', $id);

if (!empty($_POST)) {
   
        if ($_POST['id'] == 0) {
        $loginname = $_POST['loginname'];   
        $sql_check = mysql_query("select * from giangvien where loginname='".$loginname."'");
        $count_sl = mysql_num_rows($sql_check);
        if ($count_sl == 0) $err = "";
        else $err = "Login name vừa nhập đã tồn tại trong hệ thống, hãy nhập lại!";
        
        $gv_macb = $_POST['gv_macb'];   
        $sql_check1 = mysql_query("select * from giangvien where gv_macb='".$gv_macb."'");
        $count_sl1 = mysql_num_rows($sql_check1);
        if ($count_sl1 == 0) $err .= "";
        else $err .= "<br/>Mã cán bộ vừa nhập đã tồn tại trong hệ thống, hãy nhập lại!";
     }
     else $err = "";
     
     
     if ($err == ""){
        if ($_POST['id'] == 0){
	   $giangvien = array(
    		'id' => intval($_POST['id']),
            'loginname' => escape($_POST['loginname']),
            'password' => $_POST['password'],
            'role' => 1,
            'gv_macb' => $_POST['gv_macb'],
            'name' => $_POST['name'],
            'gv_donvi' => $_POST['gv_donvi'],
            'gv_detai' => $_POST['gv_detai']
    	);
    	save('giangvien', 'id', $giangvien);
    	header('location:admin.php?controller=giangvien');
        }
        else{
            if ($_POST['password'] != ""){
                $giangvien = array(
                	'id' => intval($_POST['id']),
                    'loginname' => escape($_POST['loginname']),
                    'password' => $_POST['password'],
                    'gv_macb' => $_POST['gv_macb'],
                    'name' => $_POST['name'],
                    'gv_donvi' => $_POST['gv_donvi'],
                    'gv_detai' => $_POST['gv_detai']
        	       );
        	save('giangvien', 'id', $giangvien);
        	header('location:admin.php?controller=giangvien');
            }
            else{
                $giangvien = array(
            		'id' => intval($_POST['id']),
                    'loginname' => escape($_POST['loginname']),
                    'name' => $_POST['name'],
                    'gv_donvi' => $_POST['gv_donvi'],
                    'gv_detai' => $_POST['gv_detai']
        	   );
        	save('giangvien', 'id', $giangvien);
        	header('location:admin.php?controller=giangvien');
            }
        }
     }
 }
//load view
require('backend/views/giangvien/edit.php');