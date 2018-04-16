<?php

/**
 * Lưu dữ liệu vào CSDL
 * $data là mảng chứa dữ liệu.
 */
function save($table, $data_field, $data = array()) {
    //xử lý dữ liệu $data
    $values = array();
    foreach ($data as $key => $value) {
        $value = mysql_real_escape_string($value);
        $values[] = "`$key`='$value'";
    }

    //lưu dữ liệu: INSERT/UPDATE
    $id = intval($data[$data_field]);
    if ($id > 0) {
       $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE $data_field=$id";
    } else {
        $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    }

    mysql_query($sql) or die(mysql_error());

    $id = ($id>0) ? $id : mysql_insert_id();
    return $id;
}

/**
 * Xóa bản ghi có khóa chính là $id
 */
function delete($table, $data_field, $id) {
    $id = intval($id);
    $sql = "DELETE FROM `$table` WHERE $data_field=$id";
    mysql_query($sql) or die(mysql_error());
}

/**
 * Trả về bản ghi có khóa chính là $id
 */
function get_a_record($table, $data_field, $id, $select = '*') {
    //truy vấn
    $id = intval($id);
    $sql = "SELECT $select FROM `$table` WHERE $data_field=$id";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = NULL;
    if (mysql_num_rows($query) > 0) {
        $data = mysql_fetch_assoc($query);
        mysql_free_result($query);
    }
    return $data;
}

function get_a_record_only($table, $data_field, $id, $select) {
    //truy vấn
    $id = intval($id);
    $sql = "SELECT $select as 'result' FROM `$table` WHERE $data_field=$id";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = NULL;
    if (mysql_num_rows($query) > 0) {
        $data = mysql_fetch_assoc($query);
        mysql_free_result($query);
    }
    return $data['result'];
}

/**
 * Trả về tất cả bản ghi thỏa mãn điều kiện trong $option. 
 */
function get_all($table, $options = array()) {
    //xử lý $options
    $select = isset($options['select']) ? $options['select'] : '*';
    $groupby = isset($options['groupby']) ? $options['groupby'] : '';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';

    //truy vấn
    $sql = "SELECT $select FROM $table $groupby $where $order_by $limit";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = array();
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysql_free_result($query);
    }

    return $data;
}

function get_list_rooms($sql){
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = array();
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysql_free_result($query);
    } 
    return $data;   
}

function get_all_delete_2_table($table1,$table2, $options = array()) {
    //xử lý $options
    $select = isset($options['select']) ? $options['select'] : '*';
    $groupby = isset($options['groupby']) ? $options['groupby'] : '';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';

    //truy vấn
    $sql = "SELECT $select FROM $table1,$table2 $groupby $where $order_by $limit";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = array();
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysql_free_result($query);
    }

    return $data;
}

// lay tat ca ban ghi trong table de do vào select
function get_all_select($table, $select1,$select2, $data_field, $value) {
    if ($data_field=='' || $value=='') $str = "";
    else $str = "WHERE $data_field=$value";
    if ($select1=="") $sql = "SELECT $select2 FROM `$table` $str";
    else if ($select2=="") $sql = "SELECT $select1 FROM `$table` $str";
    else if ($select1=="" && $select1=="") $sql = "SELECT * FROM `$table` $str";
    else if ($select1!="" && $select1!="") $sql = "SELECT $select1,$select2 FROM `$table` $str";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = array();
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysql_free_result($query);
    }

    return $data;
}


// lay tat ca cac ban ghi trong table khac gia tri hien thi dau tien trong select
function get_all_not_select($table, $select1,$select2, $data_field, $value) {
    if ($data_field=='' || $value=='') $str = "";
    else $str = "WHERE $data_field!=$value";
    $sql = "SELECT $select1,$select2 FROM `$table` $str";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = array();
    if (mysql_num_rows($query) > 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysql_free_result($query);
    }

    return $data;
}
/**
 * Trả về tổng số bản ghi thỏa mãn điều kiện trong $option.
 */
function get_total($table, $options = array()) {
    //xử lý $options
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';

    //truy vấn        
    $sql = "SELECT COUNT(*) as total FROM `$table` $where";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $row = mysql_fetch_assoc($query);

    return $row['total'];
}

function xuat_excel(){
    $WorlFileName="viettri-net-vn". ".doc"; 
    header("Content-type: application/x-ms-download"); 
    header("Content-Disposition: attachment; filename=$WorlFileName"); 
    header('Cache-Control: public'); //đoạn nội dung sẽ xuất ra word echo "welcome to VietTri.net.vn";
}