<form id="sinhvien" method="post" action="admin.php?controller=sinhvien&amp;action=listing" role="form">

<div class="col-xs-12">
<div class="form-group">
		<!-- Single button -->
		<div class="btn-group">
            <div class="btn-group">
                <label>Thông tin cá nhân</label>
            </div>
		</div>
        </div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td align=center style="width: 25px;font-weight:bold;">STT</td>
				<td style="font-weight:bold;">Họ tên</td>
                <td style="font-weight:bold;">Đơn vị</td>
                <td style="font-weight:bold;">Tên đề tài</td>
                <td align=center style="width: 100px;font-weight:bold;">Đăng ký</td>
			</tr>
		</thead>
		<tbody>
            <?php $stt=1?>
			<?php foreach ($giangvien as $giangvien): ?>
			<tr>
				<td align=center><?php echo $stt++?></td>
				<td><?php echo  $giangvien['name']?></td>
                <td><?php echo  $giangvien['gv_donvi']?></td>
                <td><?php echo  $giangvien['gv_detai']?></td>
                <td align=center><a style="color: navy;" href="admin.php?controller=sinhvien&amp;action=update&amp;id=<?php echo $user['id'];?>&gv_id=<?php echo $giangvien['id'];?>" class="text-danger" onclick="return confirm('Bạn có chắc chắn đăng ký không?')?true:false;">Đăng ký</a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="text-right">
		<?php echo $pagination; ?>
	</div>	
</div>

</form>