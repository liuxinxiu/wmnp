<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta content="PHP连接MySQL数据库并显示数据">
<title>PHP连接MySQL数据库并显示数据 - wmnp Server</title>
</head>

<body>

<?
/********************************************************

【连接MYSQL数据库实例】

 wmnp官方站：http://liuxinxiu.com/wmnp/
 wmnp下载点：http://code.google.com/p/wmnp/ 

*********************************************************/




    //---------基本设定---------
    $mysql_server_name = "localhost";//服务器名称；
    $mysql_username = "root";
    $mysql_password = "root";
    $mysql_database = "mysql";
    $mysql_dbtablename = "user";
   
    $sql = "select * from ".$mysql_dbtablename;
    //---------------------------
    /* PHP语义介绍
    mysql_connect 打开一个到 MySQL 服务器的连接
    mysql_db_query 发送一MySQL 查询PHP 4.0.6 起不提倡使用此函数。不要用此函数，mysql_select_db() mysql_query() 来替代
    mysql_fetch_row 从结果集中取得一行作为枚举数组；
    mysql_num_fields 取得结果集中字段的数目；
    mysql_field_name 取得结果中指定字段的字段名；
    mysql_data_seek 移动内部结果的指针；
    mysql_free_result 释放结果内存?
    */
    $conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password);//mysql连线
    $result=mysql_db_query($mysql_database,$sql,$conn);//对指定的资料库进行查
    $row=mysql_fetch_row($result);
   
    //表格开
   
    echo("<table border=1 cellspace=0 cellpadding=0>\n");
   
    //输出栏位名称
   
    echo("<tr>\n");
   
    for($i=0;$i<mysql_num_fields($result);$i++)
    {
        echo("<td nowrap>".mysql_field_name($result,$i)."</td>\n");
    }
   
    echo("</tr>\n");
   
    //将资料移动回第一
    mysql_data_seek($result,0);
   
    //输出资料内容
    while($row=mysql_fetch_row($result))
    {
        echo("<tr>\n");
        for($i=0;$i<mysql_num_fields($result);$i++)
        {
            echo("<td rowrap>$row[$i]</td>\n");
        }
        echo("</tr>\n");
    }
    //表格结束
    echo("</table>");
   
    mysql_free_result($result);
?>
</body>
</html>