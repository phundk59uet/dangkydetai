<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function giangvien_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM giangvien WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
function duyet_update($id, $gv_id){
    echo $sql = "update sinhvien set status=1 where id=$id and gv_id=$gv_id";
    mysql_query($sql) or die(mysql_error());
}