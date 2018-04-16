<?php
define('BASEPATH', dirname(__FILE__) . '/');

/** kết nối MySQL **/
$db = mysql_connect('localhost', 'root', '') or die('Could not connect to Server');
mysql_select_db('dangkydetai') or die('Could not connect to Database');
mysql_query("SET NAMES utf8");