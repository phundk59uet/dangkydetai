<form id="giangvien" method="post" action="admin.php?controller=giangvien&amp;action=listing" role="form">

<div class="col-xs-12">
<div class="form-group">
		<!-- Single button -->
		<div class="btn-group">
            <div class="btn-group">
                <label>Danh sách sinh viên đăng ký đề tài</label>
            </div>
		</div>
        </div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td align=center style="width: 25px;font-weight:bold;">STT</td>
				<td style="font-weight:bold;">Họ tên</td>
                <td style="font-weight:bold;">Mã sinh viên</td>
                <td style="font-weight:bold;">Email</td>
                <td style="font-weight:bold;">Khoa</td>
                <td style="font-weight:bold;">Chương trình đào tạo</td>
                <td style="font-weight:bold;">Tên đề tài</td>
                <td align=center style="width: 100px;font-weight:bold;">Duyệt</td>
			</tr>
		</thead>
		<tbody>
            <?php $stt=1?>
			<?php foreach ($sinhvien as $sinhvien): ?>
			<tr>
				<td align=center><?php echo $stt++?></td>
				<td><?php echo  $sinhvien['name']?></td>
                <td><?php echo  $sinhvien['sv_masv']?></td>
                <td><?php echo  $sinhvien['sv_email']?></td>
                <td><?php echo  $sinhvien['sv_khoa']?></td>
                <td><?php echo  $sinhvien['sv_chuongtrinhdt']?></td>
                <td>
                    <?php $gv_id = $sinhvien['gv_id']?>
                    <?php 
                        $gv_id = $sinhvien['gv_id'];
                        $sql = mysql_query("select * from giangvien where id=".$gv_id);
                        $row = mysql_fetch_assoc($sql);
                        echo $row['gv_detai'];
                    ?>
                </td>
                <td align=center>
                <?php if ($sinhvien['status'] == 0) {?><a style="color: navy;" href="admin.php?controller=giangvien&amp;action=update&amp;id=<?php echo $sinhvien['id'];?>" class="text-danger" onclick="return confirm('Bạn có chắc chắn duyệt không?')?true:false;">Duyệt</a> <?php } else {?>
                <?php echo "Đã duyệt";} ?>
                </td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="text-right">
		<?php echo $pagination; ?>
	</div>	
</div>

</form>