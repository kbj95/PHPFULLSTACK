<?php
    // 문자열 합치기
    // $str_1 = "aaa";
    // $str_2 = "bbb";
    // $str_sum = $str_1.$str_2.$str_1;

    // echo $str_sum;

    // 대소문자 변소
    // $str_en = "abcd efgh";
    // echo strtolower($str_en),"\n"; // 소문자 변환 abcd efgh
    // echo strtoupper($str_en),"\n"; // 대문자 변환 ABCD EFGH
    // echo ucfirst($str_en),"\n"; // 맨 앞 글자만 대문자로 변환 Abcd efgh
    // echo ucwords($str_en),"\n"; // 각 단어의 맨앞글자만 대문자로 변환 Abcd Efgh

    // URL관련 함수
    $url = "https://www.google.com/search?q=foreach&oq=&aqs=chrome.0.69i59i450l8.31094061j0j15&sourceid=chrome&ie=UTF-8";

    $arr_url = parse_url($url);
    // var_dump($arr_url);

    parse_str($arr_url["query"], $arr_parse);

    var_dump($arr_parse);
?>