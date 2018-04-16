<form id="sinhvien" method="post" action="admin.php?controller=sinhvien&amp;action=index" role="form">

<div class="col-xs-12">
	<?php if($user['role'] == 3){ ?>
	<div class="form-group">
		<!-- Single button -->
		<div class="btn-group">
            <div class="btn-group">
                <label><?php echo $title;?></label>
            </div>
		</div>
        
		<a href="admin.php?controller=sinhvien&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Add</a>
	</div>
    <?php } ?>
    <?php if($user['role'] == 2){ ?>
	<div class="form-group">
		
		<a style="margin-bottom: 5px;" href="admin.php?controller=sinhvien&amp;action=listing" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Xem danh sách đề tài được đăng ký</a>
	</div>
<?php } ?>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td align=center style="width: 25px;font-weight:bold;">STT</td>
				<td style="font-weight:bold;">Tên đăng nhập</td>
                <td style="font-weight:bold;">Họ tên</td>
                <td style="font-weight:bold;">Mã sinh viên</td>
                <td style="font-weight:bold;">Email</td>
                <td style="font-weight:bold;">Khoa</td>
                <td style="font-weight:bold;">Chương trình đào tạo</td>
                <?php if($user['role'] == 3){ ?><td align=center style="width: 30px;font-weight:bold;">Xóa</td><?PHP } ?>
			</tr>
		</thead>
		<tbody>
            <?php $stt=1?>
			<?php foreach ($sinhvien as $sinhvien): ?>
			<tr>
				<td align=center><?php echo $stt++?></td>
				<td><a href="admin.php?controller=sinhvien&amp;action=edit&amp;id=<?php echo $sinhvien['id'];?>"><?php echo $sinhvien['loginname'];?></a></td>
                <td><?php echo  $sinhvien['name']?></td>
                <td><?php echo  $sinhvien['sv_masv']?></td>
                <td><?php echo  $sinhvien['sv_email']?></td>
                <td><?php echo  $sinhvien['sv_khoa']?></td>
                <td><?php echo  $sinhvien['sv_chuongtrinhdt']?></td>
                <?php if($user['role'] == 3){ ?><td align=center><a href="admin.php?controller=sinhvien&amp;action=delete&amp;id=<?php echo $sinhvien['id'];?>" class="text-danger" onclick="return confirm('Bạn có chắc chắn xóa không?')?true:false;"><i class="glyphicon glyphicon-remove"></i></a></td><?PHP } ?>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="text-right">
		<?php echo $pagination; ?>
	</div>	
</div>

</form>