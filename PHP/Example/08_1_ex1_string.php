<?php
    // 1.문자열 합치기
    // $str_1 = "aaa";
    // $str_2 = "bbb";
    // $str_sum = $str_1.$str_2.$str_1;

    // echo $str_sum;

    // 2.대소문자 변소
    // $str_en = "abcd efgh";
    // echo strtolower($str_en),"\n"; // 소문자 변환 abcd efgh
    // echo strtoupper($str_en),"\n"; // 대문자 변환 ABCD EFGH
    // echo ucfirst($str_en),"\n"; // 맨 앞 글자만 대문자로 변환 Abcd efgh
    // echo ucwords($str_en),"\n"; // 각 단어의 맨앞글자만 대문자로 변환 Abcd Efgh

    // 3.URL관련 함수
    // $url = "https://www.google.com/search?q=foreach&oq=&aqs=chrome.0.69i59i450l8.31094061j0j15&sourceid=chrome&ie=UTF-8";

    // $arr_url = parse_url($url);
    // var_dump($arr_url);

    // parse_str($arr_url["query"], $arr_parse);
    // var_dump($arr_parse);

    // 4.역순의 문자열
    // $str_abcd = "abcd";
    // echo strrev($str_abcd); // 한글은 지원하지 않음

    // 5.문자열 자르기 : 한글은 멀티바이트 문자이기때문에 주의해야한다.mb_substr사용하기
    // $str_1 = "가나다라마";
    // // echo substr($str_1, 2); // 2는 2바이트만 자르겠다라는건데 한글은 한글자에
    //                         // 3바이트라 이상하게 출력된다
    // echo mb_substr($str_1,2,1); // 다
    // echo mb_substr($str_1,3,2); // 라마
    // echo mb_substr($str_1,-1); // 마 (스타트 파라미터가 음수이면 오른쪽부터 자릅니다)
    // $str_2 = "abcdef";
    // // echo substr($str_2,2);

        // // 5-1.문자열 자르기로 "PHP입니다."만 출력해 주세요.
        // $str_tng = "안녕하세요. PHP입니다.";
        // echo mb_substr($str_tng, 7)."\n";
        // echo mb_substr($str_tng, -7)."\n";
        // // 5-2.문자열 자르기로 "세요. P"만 출력해주세요.
        // echo mb_substr($str_tng, 3, 5)."\n";
        // echo mb_substr($str_tng, -11, 5)."\n";

    // 6.문자열 빈공간 지우기 : spacebar,tab,줄바꿈 모두 지운다.
    // $str_trim = "       abcd          \n";
    // echo trim($str_trim)."\n";
    // echo rtrim($str_trim)."\n";
    // echo ltrim($str_trim)."\n";

    // 7.문자열의 길이를 구하는 함수
    // $str_len1 = "abcd";
    // $str_len2 = "가나다라";

    // echo strlen($str_len1); // 4
    // echo strlen($str_len2); // 12
    // echo mb_strlen($str_len1); // 4
    // echo mb_strlen($str_len2); // 4

    // 8.문자열 포맷에 따라 출력하는 함수
    // define("WELCOME", "안녕하세요.%s님.");
    // printf(WELCOME, "홍길동"); // 안녕하세요.홍길동님.
    // printf("안녕하세요. %s입니다. %d", "PHP", 1234);
        // 8-1.기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
        // 에러 번호 : 에러종류
        // 1 : 시스템
        // 2 : 로그인
        // 3 : 접속
        // define("system","ERROR(%d) : %s ERROR가 발생했습니다.");
        // define("login","ERROR(%d) : %s ERROR가 발생했습니다.");
        // define("access","ERROR(%d) : %s ERROR가 발생했습니다.");
        // printf(system, 1,"시스템");
        // echo "\n";
        // printf(login, 2,"로그인");
        // echo "\n";
        // printf(access, 3,"접속");
        // echo "\n";

    // 9.문자열을 분리하는 함수
    $str_sscanf = "가나다라 50 abcd";
    sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
    // echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";

    // 10. 문자열 반복해서 찍어주는 함수
    // echo str_repeat("*",2);

    // 11. 문자열을 특정문자열로 분리하는 함수 : explode() 많이 사용함!!
    $str_expl = "홍길동,27세,남자,의적,조선";
    $arr_expl = explode(",",$str_expl);
    // print_r($arr_expl);

    // 12. 배열을 특정 문자열로 합치는 함수 : implode()
    // $str_impl = implode("/",$arr_expl);
    // echo $str_impl;

?>