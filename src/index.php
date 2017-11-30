<?php
include 'dbconfig.php';
include 'write.php';
$id = $_GET["id"];
?>

<!doctype html>
<html lang="en">

<head>
    <title>NewFACE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./theme.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand" href="#">뉴페이스</a>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary">자기소개 변경</button>
                <button type="button" class="btn btn-outline-primary">로그아웃</button>
            </div>
        </div>
    </nav>

    <div class="container mt-5">


        <div class="card p-3 mt-5">
            <form action="./index.php" method="POST">
                <fieldset>
                    <div class="form-group">
                        <label for="exampleTextarea">
                            <!--id 전달방식??-->
                            <strong><?php echo $id; ?></strong>님의 말:</label>
                        <textarea class="form-control" name="content" id="exampleTextarea" rows="3" placeholder="하고 싶은 이야기"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6  mt-2">
                            <span class="text-muted ml-1">
                                0/140 글자 작성
                            </span>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary float-right">올리기</button>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </fieldset>
            </form>
        </div>


        <div class="card p-3 mt-5">

            <div class="media">
                <div class="media-body">
                    <h6 class="mt-0 text-muted">
                        <a href="#">ㅁㅇ331</a>
                        <span class="text-muted">(11. 09. 11:30)</span>:</h6>
                    송도에서 빨래는 어떻게 해야 하는지 걱정이에요. (
                    <a href="#">댓글 쓰기</a>)
                    <div class="media mt-3">
                        <a class="pr-4" href="#">
                        </a>
                        <div class="media-body">
                            <h6 class="mt-0 ">
                                <a href="#">ㅎㅈ331</a>
                                <span class="text-muted">(11. 09. 12:03)</span>:</h6>
                            그냥 세제랑 섬유유연제 가져오셔서 빨래하면 돼요. (
                            <a href="#">댓글 쓰기</a>)
                        </div>
                    </div>
                    <div class="media mt-3">
                        <a class="pr-4" href="#">
                        </a>
                        <div class="media-body">
                            <h6 class="mt-0 ">
                                <span class="badge badge-primary">New</span>
                                <a href="#">ㅊㅁ711</a>
                                <span class="text-muted">(11. 09. 12:13)</span>:</h6>
                            맡기면 빨래해주는데도 있다던데? (
                            <a href="#">댓글 쓰기</a>)
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="media mt-0">
                <div class="media-body">
                    <h6 class="mt-0 text-muted">
                        <a href="#">ㄷㅇ81</a>
                        <span class="text-muted">(11. 09. 09:30)</span>:</h6>
                    송도학사 입사 언제하는지 아는사람 있음? (
                    <a href="#">댓글 쓰기</a>)
                </div>
            </div>
            <hr/>
            <?php
            $query = "SELECT * FROM postings ORDER BY timestamp DESC";
            $reply = mysql_query($query);
            $num_replies = mysql_num_rows($reply);
            // 몇번째 페이지인지 고려해서 인덱스 수정해야할 듯
            for($i=0;$i < $numb; $i++)
            {
                $row = mysql_fetch_assoc($reply);
            ?>
                <div class="media mt-0">
                    <div class="media-body">
                        <!-- 본문 -->
                        <h6 class="mt-0 text-muted">
                            <a href="#"><?php echo $row["id"] ?></a>
                            <span class="text-muted"><?php echo $row["timestamp"]; ?></span>:</h6>
                        <?php echo $row["content"]; ?>
                        (<a href="#">댓글 쓰기</a>)

                        <!-- 댓글(???) -->
                        <div class="media mt-3">
                        <a class="pr-4" href="#">
                        </a>
                        <div class="media-body">
                            <h6 class="mt-0 ">
                                <a href="#">ㅎㅈ331</a>
                                <span class="text-muted">(11. 09. 12:03)</span>:</h6>
                            그냥 세제랑 섬유유연제 가져오셔서 빨래하면 돼요. (
                            <a href="#">댓글 쓰기</a>)
                        </div>
                    </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">이전</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">다음</a>
                </li>
            </ul>
        </nav>


    </div>

    <div class="mt-5 p-5 bg-light">


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>

</html>