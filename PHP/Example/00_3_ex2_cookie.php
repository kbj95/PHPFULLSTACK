<?php

// cookie 작성
// string 형태만 저장할 수 있음

// setcookie( "key","value","유효기간(시간)" );
setcookie("name", "Kim Mihyeon", time() + 30); // 현재 + 30초
setcookie("age", "26", time() + 300); // 현재 + 300초

// echo $_COOKIE["name"];

// cookie 삭제방법
// setcookie("age","", 0);


?>