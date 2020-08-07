<?php

mysql_connect('localhost','root','');
//选择数据库
mysql_select_db('cv');
mysql_query("set charset 'utf8' ");
mysql_query("set character set 'utf8'");

$id = $_GET['id'];

$num = $_GET['num'];

$sql = "update goods set num=$num where id=$id";

$res = mysql_query($sql);

if ($res) {
    echo json_encode(array(
        "code" => 200,
        "msg" => "更新成功"
    ));
} else {
    echo json_encode(array(
        "code" => 500,
        "msg" => "网络错误，请重试"
    ));
}

?>