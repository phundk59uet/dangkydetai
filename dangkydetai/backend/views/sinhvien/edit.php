<?php require('backend/views/common/header.php'); ?>

<body>

    <?php require('backend/views/common/navbar.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-12 pull-right" id="sidebar" role="navigation">
                <?php require('backend/views/common/sidebar.php'); ?>
            </div>
            <div class="col-sm-10 col-xs-12 pull-left">
                <div class="row">
                <!-- BEGIN CONTENT -->
                    <?php require('backend/views/sinhvien/form.php'); ?>
                <!-- END CONTENT -->
                </div>
            </div><!--/span-->            
        </div><!--/row-->
    </div><!--/.container-->

</body>
</html>