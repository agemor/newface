<?php
// 쓰여진 글 정보 저장 후 index.php로 redirect

if (!$link = mysql_connect('db.helloyonsei.com', 'yontem', 'yontemadmin18!')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('dbnewface', $link)) { //dbnewface로 만들 예정
    echo 'Could not select database';
    exit;
}

mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

$content = $_POST["content"];

// DB에 저장

// 다시 메인페이지로
header( 'Location: http://newface.com/index.php' ); // 주소 다를 수 있음
?>