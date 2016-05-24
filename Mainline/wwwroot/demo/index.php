<?php

/********************************************************

【连接MYSQL数据库实例】

 wmnp官方站：http://liuxinxiu.com/wmnp/
 wmnp下载点：http://code.google.com/p/wmnp/ 

*********************************************************/

$conn = @ mysql_connect("localhost","root","root") or die ('<h2 style="color:#C41902">Mysql数据库连接失败！</h2>');

// 以上为mysql数据库的链接地址、登录名、密码

$result= mysql_select_db("mysql",$conn);

// 以上定义了连接mysql数据库的具体某个库，的库名。

if($result){

echo "<h2>建立Mysql数据库连接完成!</h2>";


}else{

echo "<h2>建立Mysql数据库连接错误!</h2>".mysql_error();

}


?>
