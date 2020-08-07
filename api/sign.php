<?php
mysql_connect('localhost','root','');
//选择数据库
mysql_select_db('cv');
mysql_query("set charset 'utf8' ");
mysql_query("set character set 'utf8'");

$name=$_POST['username'];
$pwd=$_POST['pwd'];

//查询数据库是否存在的用户名密码一致的用户

$sql="select * from user where name='$name' and pwd='$pwd'";

$res=mysql_query($sql);

//mysql_num_rows是PHP语言的中的函数，其表示取得结果集中行的数目。
//此命令只对SELECT语句有效。要取得被 INSERT，UPDATE 或者 DELETE 查询所影响到的行的数目，

if(mysql_num_rows($res)>0){
    //登陆成功
    echo json_encode(array(
        'code' => 200,
        'msg' =>'登录成功'
    ));

}else{
    echo json_encode(array(
        'code' => 500,
        'msg' => '用户名密码错误'
    ));
}
?>