<?php
//mySQL 연결
if (!$link = mysql_connect('db.helloyonsei.com', 'yontem', 'yontemadmin18!')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('dbyontem', $link)) {
    echo 'Could not select database';
    exit;
}

mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");
?>