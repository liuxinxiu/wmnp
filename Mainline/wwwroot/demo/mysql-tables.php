<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta content="PHP����MySQL���ݿⲢ��ʾ����">
<title>PHP����MySQL���ݿⲢ��ʾ���� - wmnp Server</title>
</head>

<body>

<?
/********************************************************

������MYSQL���ݿ�ʵ����

 wmnp�ٷ�վ��http://liuxinxiu.com/wmnp/
 wmnp���ص㣺http://code.google.com/p/wmnp/ 

*********************************************************/




    //---------�����趨---------
    $mysql_server_name = "localhost";//���������ƣ�
    $mysql_username = "root";
    $mysql_password = "root";
    $mysql_database = "mysql";
    $mysql_dbtablename = "user";
   
    $sql = "select * from ".$mysql_dbtablename;
    //---------------------------
    /* PHP�������
    mysql_connect ��һ���� MySQL ������������
    mysql_db_query ����һMySQL ��ѯPHP 4.0.6 ���ᳫʹ�ô˺�������Ҫ�ô˺�����mysql_select_db() mysql_query() �����
    mysql_fetch_row �ӽ������ȡ��һ����Ϊö�����飻
    mysql_num_fields ȡ�ý�������ֶε���Ŀ��
    mysql_field_name ȡ�ý����ָ���ֶε��ֶ�����
    mysql_data_seek �ƶ��ڲ������ָ�룻
    mysql_free_result �ͷŽ���ڴ�?
    */
    $conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password);//mysql����
    $result=mysql_db_query($mysql_database,$sql,$conn);//��ָ�������Ͽ���в�
    $row=mysql_fetch_row($result);
   
    //���
   
    echo("<table border=1 cellspace=0 cellpadding=0>\n");
   
    //�����λ����
   
    echo("<tr>\n");
   
    for($i=0;$i<mysql_num_fields($result);$i++)
    {
        echo("<td nowrap>".mysql_field_name($result,$i)."</td>\n");
    }
   
    echo("</tr>\n");
   
    //�������ƶ��ص�һ
    mysql_data_seek($result,0);
   
    //�����������
    while($row=mysql_fetch_row($result))
    {
        echo("<tr>\n");
        for($i=0;$i<mysql_num_fields($result);$i++)
        {
            echo("<td rowrap>$row[$i]</td>\n");
        }
        echo("</tr>\n");
    }
    //������
    echo("</table>");
   
    mysql_free_result($result);
?>
</body>
</html>