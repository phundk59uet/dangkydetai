<form id="giangvien" method="post" action="admin.php?controller=giangvien&amp;action=index" role="form">

<div class="col-xs-12">
		<?php if($user['role'] == 3){ ?>
	<div class="form-group">
		<!-- Single button -->
		<div class="btn-group">
            <div class="btn-group">
                <label><?php echo $title;?></label>
            </div>
		</div>
       
		<a href="admin.php?controller=giangvien&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Add</a>
	</div>
<?php } ?>
<?php if($user['role'] == 1){ ?>
	<div class="form-group">
	
		<a style="margin-bottom: 5px;" href="admin.php?controller=giangvien&amp;action=listing" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Xem danh sách sinh viên đăng ký</a>
	</div>
<?php } ?>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td align=center style="width: 25px;font-weight:bold;">STT</td>
				<td style="font-weight:bold;">Tên đăng nhập</td>
                <td style="font-weight:bold;">Họ tên</td>
                <td style="font-weight:bold;">Mã cán bộ</td>
                <td style="font-weight:bold;">Đơn vị</td>
                <td style="font-weight:bold;">Tên đề tài</td>
               <?php if($user['role'] == 3){ ?> <td align=center style="width: 30px;font-weight:bold;">Xóa</td> <?php } ?>
			</tr>
		</thead>
		<tbody>
            <?php $stt=1?>
			<?php foreach ($giangvien as $giangvien): ?>
			<tr>
				<td align=center><?php echo $stt++?></td>
				<td><a href="admin.php?controller=giangvien&amp;action=edit&amp;id=<?php echo $giangvien['id'];?>"><?php echo $giangvien['loginname'];?></a></td>
                <td><?php echo  $giangvien['name']?></td>
                <td><?php echo  $giangvien['gv_macb']?></td>
                <td><?php echo  $giangvien['gv_donvi']?></td>
                <td><?php echo  $giangvien['gv_detai']?></td>
                <?php if($user['role'] == 3){ ?><td align=center><a href="admin.php?controller=giangvien&amp;action=delete&amp;id=<?php echo $giangvien['id'];?>" class="text-danger" onclick="return confirm('Bạn có chắc chắn xóa không?')?true:false;"><i class="glyphicon glyphicon-remove"></i></a></td> <?php } ?>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="text-right">
		<?php echo $pagination; ?>
	</div>	
</div>

</form>