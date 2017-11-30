<?php
include 'dbconfig.php';

$posting = array(
    'id'      => "",
    'content' => ""
);

$posting['id'] = $_POST["id"];
$posting['content'] = $_POST["content"];

// DB에 저장

$query = sprintf("INSERT INTO postings (content, writer) VALUES ('%s', '%s')",
                $posting['id'], $posting['content']
                );
$reply = mysql_query($query);
if($reply)
{
    ?>
    <script>
    alert("업로드가 완료되었습니다.");
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("업로드에 실패하였습니다.");
    </script>
    <?php
}

?>