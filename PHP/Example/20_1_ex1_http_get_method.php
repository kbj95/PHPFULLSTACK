<?php
// 1. GET Method로 데이터를 넘겨주는 방법1
// - Query String에 키와 값을 셋팅 해준다.
// http://localhost/mini_board/src/board_update.php?board_no=1
// http://localhost/mini_board/src/board_update.php?board_no=1&key1=10
// 프로토콜//도메인/패스 ? 쿼리스트링

// http://localhost/20_1_ex2_http_get.php?aaa=1&bbb=2
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1-2. form Tag를 이용하는 방법 -->
    <form method="get" action="20_1_ex2_http_get.php">
        <input type="text" name="test1" value="testValue1">
        <input type="text" name="test2" value="testValue2">
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <br>
    <a href="http://localhost/20_1_ex2_http_get.php?aaa=1">A태그</a>
</body>
</html>
