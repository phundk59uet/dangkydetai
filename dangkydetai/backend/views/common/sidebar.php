<style>
    #detail_3,#detail_1,#detail_2, #detail_4{ display:none;}
    #b3,#b1,#b2, #b4 {background-color: whitesmoke; padding: 8px 0px 8px 15px; border-bottom:1px solid white;}
</style>
<script>
$(document).ready(function(){
    $("#b1").click(function(){
        $("#detail_1").toggle();
    });
});
</script>
<script>
$(document).ready(function(){
    $("#b2").click(function(){
        $("#detail_2").toggle();
    });
});
</script>
<script>
$(document).ready(function(){
    $("#b3").click(function(){
        $("#detail_3").toggle();
    });
});
</script>
<script>
$(document).ready(function(){
    $("#b4").click(function(){
        $("#detail_4").toggle();
    });
});
</script>
<?php if ($user['role'] == 3){ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="glyphicon glyphicon-th-large"></i> DANH MỤC
            <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
        </h3>
    </div>
    <div class="list-group hidden-xs">
        <div id="b1"><i class="glyphicon glyphicon-user"></i> QL GIẢNG VIÊN</div>
        <div id="detail_1">
            <a href="admin.php?controller=giangvien" class="list-group-item">GIẢNG VIÊN</a>
        </div>
        <div id="b2"><i class="glyphicon glyphicon-user"></i> QL SINH VIÊN </div>
        <div id="detail_2">
            <a href="admin.php?controller=sinhvien" class="list-group-item">SINH VIÊN</a>
        </div>
    </div>
</div>
<?php } else if ($user['role'] == 1){ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="glyphicon glyphicon-th-large"></i> DANH MỤC
            <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
        </h3>
    </div>
    <div class="list-group hidden-xs">
        <div id="b1"><i class="glyphicon glyphicon-user"></i> THÔNG TIN</div>
        <div id="detail_1">
            <a href="admin.php?controller=giangvien" class="list-group-item">DUYỆT ĐỀ TÀI</a>
        </div>
        </div>
    </div>
<?php } else if ($user['role'] == 2){ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="glyphicon glyphicon-th-large"></i> DANH MỤC
            <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
        </h3>
    </div>
    <div class="list-group hidden-xs">
        <div id="b1"><i class="glyphicon glyphicon-user"></i> THÔNG TIN</div>
        <div id="detail_1">
            <a href="admin.php?controller=sinhvien" class="list-group-item">ĐĂNG KÝ ĐỀ TÀI</a>
            <a href="admin.php?controller=sinhvien&action=detai" class="list-group-item">ĐỀ TÀI CỦA BẠN</a>
        </div>
        </div>
    </div>
<?php } ?>
