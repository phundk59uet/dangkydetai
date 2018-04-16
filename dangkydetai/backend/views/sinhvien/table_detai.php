<form id="sinhvien" method="post" action="admin.php?controller=sinhvien&amp;action=listing" role="form">

<div class="col-xs-12">
    <div class="form-group">
		<!-- Single button -->
		<div class="btn-group">
            <div class="btn-group">
                <label>Đề tài bạn đã đăng ký</label>
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
                <td align=center style="width: 100px;font-weight:bold;">Trạng thái</td>
			</tr>
		</thead>
		<tbody>
            <?php $stt=1?>
			<?php foreach ($sinhvien as $sinhvien): ?>
            <?php 
                $gv_id = $sinhvien['gv_id'];
                $sql = mysql_query("select * from giangvien where id=".$gv_id);
                $row = mysql_fetch_assoc($sql);
            ?>
			<tr>
				<td align=center><?php echo $stt++?></td>
				<td><?php echo  $row['name']?></td>
                <td><?php echo  $row['gv_donvi']?></td>
                <td><?php echo  $row['gv_detai']?></td>
                <td style="text-align: center;">
                    <?php if ($sinhvien['status'] == 0) echo "Chưa duyệt"; else echo "Đã duyệt"; ?>
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