<?php
//load model
require_once('backend/models/sinhvien.php');
$user = $_SESSION['user'];
//if form submit 
if (isset($_GET['id'])) $id = intval($_GET['id']); else $id=0;
//data
$title = ($id==0) ? 'Thêm thông tin sinh viên' : 'Sửa thông tin sinh viên';
$sinhvien = get_a_record('sinhvien', 'id', $id);

if (!empty($_POST)) {
   
        if ($_POST['id'] == 0) {
        $loginname = $_POST['loginname'];   
        $sql_check = mysql_query("select * from sinhvien where loginname='".$loginname."'");
        $count_sl = mysql_num_rows($sql_check);
        if ($count_sl == 0) $err = "";
        else $err = "Login name vừa nhập đã tồn tại trong hệ thống, hãy nhập lại!";
        
        $sv_masv = $_POST['sv_masv'];   
        $sql_check1 = mysql_query("select * from sinhvien where sv_masv='".$sv_masv."'");
        $count_sl1 = mysql_num_rows($sql_check1);
        if ($count_sl1 == 0) $err .= "";
        else $err .= "<br/>Mã sinh viên vừa nhập đã tồn tại trong hệ thống, hãy nhập lại!";
     }
     else $err = "";
     
     
     if ($err == ""){
        if ($_POST['id'] == 0){
	   $sinhvien = array(
    		'id' => intval($_POST['id']),
            'loginname' => escape($_POST['loginname']),
            'password' => $_POST['password'],
            'role' => 2,
            'sv_masv' => $_POST['sv_masv'],
            'name' => $_POST['name'],
            'sv_email' => $_POST['sv_email'],
            'sv_khoa' => $_POST['sv_khoa'],
            'sv_chuongtrinhdt' => $_POST['sv_chuongtrinhdt']
    	);
    	save('sinhvien', 'id', $sinhvien);
    	header('location:admin.php?controller=sinhvien');
        }
        else{
            if ($_POST['password'] != ""){
                $sinhvien = array(
                	'id' => intval($_POST['id']),
                    'loginname' => escape($_POST['loginname']),
                    'password' => $_POST['password'],
                    'sv_masv' => $_POST['sv_masv'],
                    'name' => $_POST['name'],
                    'sv_email' => $_POST['sv_email'],
                    'sv_khoa' => $_POST['sv_khoa'],
                    'sv_chuongtrinhdt' => $_POST['sv_chuongtrinhdt']
        	       );
        	save('sinhvien', 'id', $sinhvien);
        	header('location:admin.php?controller=sinhvien');
            }
            else{
                $sinhvien = array(
            		'id' => intval($_POST['id']),
                    'loginname' => escape($_POST['loginname']),
                    'name' => $_POST['name'],
                    'sv_email' => $_POST['sv_email'],
                    'sv_khoa' => $_POST['sv_khoa'],
                    'sv_chuongtrinhdt' => $_POST['sv_chuongtrinhdt']
        	   );
        	save('sinhvien', 'id', $sinhvien);
        	header('location:admin.php?controller=sinhvien');
            }
        }
     }
 }
//load view
require('backend/views/sinhvien/edit.php');