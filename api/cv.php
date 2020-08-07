<?php
mysql_connect('localhost','root','');
//选择数据库
mysql_select_db('cv');
mysql_query("set charset 'utf8' ");
mysql_query("set character set 'utf8'");


$sql="select * from goods";
$res=mysql_query($sql);

$shop=array();
while ($row = mysql_fetch_assoc($res)) {
    array_push($shop,$row);
}

echo json_encode(array(
    
    "list" => $shop
));

?>