<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="vi" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<?php require('backend/views/common/header.php'); ?>
<body>

    <?php require('backend/views/common/navbar.php'); ?>

     <div class="container">
        <div class="row">
           
            <div class="col-sm-10 col-xs-12 pull-right">
                <div class="row">
                    <?php if ($user['role'] == 2){ ?>
                    <div class="col-xs-12" style="margin-bottom: 5px;">
                        <?php 
                           
                            $query = mysql_query("select * from sinhvien where status = 1 and id=".$user['id']);
                            
                            if (mysql_num_rows($query) == 0){
                       ?>
                       <label style="border: 1px solid red; padding:5px; width:100%; border-radius:3px; background-color: whitesmoke;">Bạn có 0 thông báo mới</label>
                       
                       <?php          
                            }
                            else {
                       ?>
                       <label style="border: 1px solid green; padding:5px; color: white; width:100%; border-radius:3px; background-color: green;">Đề tài của bạn đã được duyệt</label>
                       <?php
                            }
                        ?>
                         
                         
                    </div>
                   <?php } ?>
                    <div class="col-xs-12">
                         <img style="width: 100%;" src="./pictures/anh_truong.jpg" />
                    </div>
                   
                </div>
            </div><!--/span--> 
             <div class="col-sm-2 col-xs-12 pull-left" id="sidebar" role="navigation">
                <?php require('backend/views/common/sidebar.php'); ?>
            </div>           
        </div><!--/row-->
    </div><!--/.container-->  
</body>
</html>