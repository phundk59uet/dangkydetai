<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function sinhvien_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM sinhvien WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
// mỗi sinh viên được đăng ký 1 đề tài
function dangky_update($id, $gv_id){
    echo $sql = "update sinhvien set gv_id=$gv_id,status=0 where id=$id";
    mysql_query($sql) or die(mysql_error());
}