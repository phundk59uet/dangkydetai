<?php
/**
 * Đăng nhập hệ thống
 * @param  string
 * @param  string
 * @return boolean
 */
function user_login($adm_loginname, $adm_password, $adm_role) {
    if ($adm_role == 1){
        $sql = "SELECT * FROM giangvien WHERE loginname='$adm_loginname' AND password='$adm_password' LIMIT 0,1";
        $query = mysql_query($sql) or die(mysql_error());
        if (mysql_num_rows($query)>0) {
            $_SESSION['user'] = mysql_fetch_assoc($query);
            return true;
        }
        return false;
    }
    else if ($adm_role == 2){
        $sql = "SELECT * FROM sinhvien WHERE loginname='$adm_loginname' AND password='$adm_password' LIMIT 0,1";
        $query = mysql_query($sql) or die(mysql_error());
        if (mysql_num_rows($query)>0) {
            $_SESSION['user'] = mysql_fetch_assoc($query);
            return true;
        }
        return false;
    }
    else if ($adm_role == 3){
        $sql = "SELECT * FROM admin_user WHERE loginname='$adm_loginname' AND password='$adm_password' LIMIT 0,1";
        $query = mysql_query($sql) or die(mysql_error());
        if (mysql_num_rows($query)>0) {
            $_SESSION['user'] = mysql_fetch_assoc($query);
            return true;
        }
        return false;
    }
}