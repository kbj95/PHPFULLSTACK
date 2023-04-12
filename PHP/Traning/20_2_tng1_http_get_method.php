<?php
    // 1.Get Method로 사용자가 입력한 데이터를 HTTP Request를 합니다.
    // 2.입력한 데이터의 상세 내역은 아래와 같습니다.
    //      2-1.key : id, pw, name, birth_date
    // 3.echo를 이용해서 각각의 데이터를 출력해 주세요.
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
    <form method="get" action="20_2_tng1_http_get_method.php">
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
        <br>
        <label for="pw">PW</label>
        <input type="password" name="password" id="pw">
        <br>
        <label for="name">NAME</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="birth">BirthDay</label>
        <input type="date" name="birth_date" id="birth">
        <button type="submit">제출</button>
    </form>
    <?php 
        $arr_get = $_GET;

        foreach ($arr_get as $key => $val) {
            echo $key." : ".$val." ";
        }
    ?>
</body>
</html>