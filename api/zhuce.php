<?php
mysql_connect('localhost','root','');
//选择数据库
mysql_select_db('cv');
mysql_query("set charset 'utf8' ");
mysql_query("set character set 'utf8'");

$name=$_POST['username'];
$pwd=$_POST['pwd'];


$sql="insert into user (name,pwd) value ('$name','$pwd')";


$res=mysql_query($sql);

echo $res;


?>