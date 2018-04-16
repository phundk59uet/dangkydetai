<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> <?php echo $title?></div>
    <div class="panel-body">
        <form id="sinhvien" class="form-horizontal" method="post" action="admin.php?controller=sinhvien&amp;action=edit" enctype="multipart/form-data" role="form">
            <input name="id" type="hidden" value="<?php echo $sinhvien ? $sinhvien['id'] : '0'; ?>"/>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label"> </label>
                <div class="col-sm-9" style="color: red;">
                <?php echo $err; ?>
                </div>
                
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tên đăng nhập: </label>
                
                <div class="col-sm-4">
                    <?php
                        if ($id == 0){
                    ?>
                    <input type="text" name="loginname" class="form-control" value="<?php echo $sinhvien ? $sinhvien['loginname'] : ''; ?>"/>
                    <?php 
                    }
                        else {echo $sinhvien['loginname'];

                    ?>
                    <input name="loginname" type="hidden" value="<?php echo $sinhvien ? $sinhvien['loginname'] : '0'; ?>"/>
                    <?php }?>
                </div>
                <label for="name" class="col-sm-2 control-label">Mật khẩu: </label>
                <div class="col-sm-3">
                    <input class="form-control" type="password" name="password" placeholder="" value="" />
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Họ tên: </label>
                <div class="col-sm-4">
                    <input name="name" type="text" class="form-control" id="name" placeholder="" value="<?php echo $sinhvien ? $sinhvien['name'] : ''; ?>" required=""/>
                </div>
                <label for="name" class="col-sm-2 control-label">Email: </label>
                <div class="col-sm-3">
                    <input name="sv_email" type="email" class="form-control" id="name" placeholder="" value="<?php echo $sinhvien ? $sinhvien['sv_email'] : ''; ?>" required=""/>
                </div>
            </div>
           
           
            <div class="form-group">
             
              <label for="name" class="col-sm-3 control-label">Mã sinh viên: </label>
              <div class="col-sm-4">
                    <?php
                        if ($id == 0){
                    ?>
                    <input type="text" name="sv_masv" class="form-control" value="<?php echo $sinhvien ? $sinhvien['sv_masv'] : ''; ?>"/>
                    <?php 
                    }
                        else {echo $sinhvien['sv_masv'];

                    ?>
                    <input name="sv_masv" type="hidden" value="<?php echo $sinhvien ? $sinhvien['sv_masv'] : '0'; ?>"/>
                    <?php }?>
                </div>
                 <label for="name" class="col-sm-2 control-label">Khóa: </label>
                <div class="col-sm-3">
                    <input name="sv_khoa" type="text" class="form-control" id="sv_khoa" placeholder="" value="<?php echo $sinhvien ? $sinhvien['sv_khoa'] : ''; ?>" required=""/>
                </div>
            </div>
            <div class="form-group">
                 <label for="name" class="col-sm-3 control-label">Chương trình đào tạo: </label>
                <div class="col-sm-9">
                    <input name="sv_chuongtrinhdt" type="text" class="form-control" id="sv_chuongtrinhdt" placeholder="" value="<?php echo $sinhvien ? $sinhvien['sv_chuongtrinhdt'] : ''; ?>" required=""/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary"><?php echo $sinhvien ? 'Sửa' : 'Thêm' ;?></button>
                    <a class="btn btn-warning" href="admin.php?controller=sinhvien">Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>