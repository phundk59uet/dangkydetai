<?php require('backend/views/common/header.php'); ?>

<body id="login">

    <?php require('backend/views/common/navbar.php'); ?>

    <div class="container">
        <div class="col-sm-4"></div>
        <form method="post" action="admin.php?controller=home&action=login" class="form-signin col-sm-4" role="form">
            <div class="form-group">
                <label>Tên đăng nhập:</label>
            	<input name="adm_loginname" type="text" class="form-control input-lg" placeholder="Tên đăng nhập" required autofocus>
            </div>
            <div class="form-group">
                <label>Mật khẩu:</label>
            	<input name="adm_password" type="password" class="form-control input-lg" placeholder="Mật khẩu" required>
            </div>   
             <div class="form-group">
                <label>Đăng nhập với tư cách:</label>
            	<select name="adm_role" class="form-control input-lg">
                    <option value="1">Giảng viên</option>
                    <option value="2">Sinh viên</option>
                    <option value="3">Admin</option>
                </select>
            </div>           
            <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
        </form>
        <div class="col-sm-4"></div>
    </div> <!-- /container -->
    
</body>
</html>