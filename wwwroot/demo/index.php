<?php

/********************************************************

������MYSQL���ݿ�ʵ����

 wmnp�ٷ�վ��http://liuxinxiu.com/wmnp/
 wmnp���ص㣺http://code.google.com/p/wmnp/ 

*********************************************************/

$conn = @ mysql_connect("localhost","root","root") or die ('<h2 style="color:#C41902">Mysql���ݿ�����ʧ�ܣ�</h2>');

// ����Ϊmysql���ݿ�����ӵ�ַ����¼��������

$result= mysql_select_db("mysql",$conn);

// ���϶���������mysql���ݿ�ľ���ĳ���⣬�Ŀ�����

if($result){

echo "<h2>����Mysql���ݿ��������!</h2>";


}else{

echo "<h2>����Mysql���ݿ����Ӵ���!</h2>".mysql_error();

}


?>
