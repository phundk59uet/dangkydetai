<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> <?php echo $title?></div>
    <div class="panel-body">
        <form id="giangvien" class="form-horizontal" method="post" action="admin.php?controller=giangvien&amp;action=edit" enctype="multipart/form-data" role="form">
            <input name="id" type="hidden" value="<?php echo $giangvien ? $giangvien['id'] : '0'; ?>"/>
            <input name="gv_macb" type="hidden" value="<?php echo $giangvien ? $giangvien['gv_macb'] : '0'; ?>"/>
            <input name="loginname" type="hidden" value="<?php echo $giangvien ? $giangvien['loginname'] : '0'; ?>"/>
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
                    <input type="text" name="loginname" class="form-control" value="<?php echo $giangvien ? $giangvien['loginname'] : ''; ?>"/>
                    <?php 
                    }
                        else {echo $giangvien['loginname'];

                    ?>
                    <input name="loginname" type="hidden" value="<?php echo $giangvien ? $giangvien['loginname'] : '0'; ?>"/>
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
                    <input name="name" type="text" class="form-control" id="name" placeholder="" value="<?php echo $giangvien ? $giangvien['name'] : ''; ?>" required=""/>
                </div>
                <label for="name" class="col-sm-2 control-label">Đơn vị: </label>
                <div class="col-sm-3">
                    <input name="gv_donvi" type="text" class="form-control" id="name" placeholder="" value="<?php echo $giangvien ? $giangvien['gv_donvi'] : ''; ?>" required=""/>
                </div>
            </div>
           
           
            <div class="form-group">
             
              <label for="name" class="col-sm-3 control-label">Mã cán bộ: </label>
              <div class="col-sm-4">
                    <?php
                        if ($id == 0){
                    ?>
                    <input type="text" name="gv_macb" class="form-control" value="<?php echo $giangvien ? $giangvien['gv_macb'] : ''; ?>"/>
                    <?php 
                    }
                        else {echo $giangvien['gv_macb'];

                    ?>
                    <input name="gv_macb" type="hidden" value="<?php echo $giangvien ? $giangvien['gv_macb'] : '0'; ?>"/>
                    <?php }?>
                </div>
                 <label for="name" class="col-sm-2 control-label">Đề tài: </label>
                <div class="col-sm-3">
                    <input name="gv_detai" type="text" class="form-control" id="gv_detai" placeholder="" value="<?php echo $giangvien ? $giangvien['gv_detai'] : ''; ?>" required=""/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary"><?php echo $giangvien ? 'Sửa' : 'Thêm' ;?></button>
                    <a class="btn btn-warning" href="admin.php?controller=giangvien">Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>