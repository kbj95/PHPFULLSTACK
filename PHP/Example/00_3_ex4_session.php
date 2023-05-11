<?php

$user_id = "php506";
$user_pw = "506";

// session명 지정, 지정하지 않으면 "PHPSESSID"로 지정됩니다. session_start 전에 선언!!!!!!
session_name("kim");

// session 시작( 시작을 해야 아래처럼 session에 데이터 저장 가능)
session_start();

// -----------------------------
// 유저 인증작업 필요, 지금은 생략( 넘어온 id와 pw가 허용범위 내인지 확인 후 ,db검색 )
// -----------------------------

// session에 데이터 저장
$_SESSION["id"] = $user_id; // 검증을 마친 아이디를 session에 저장
$_SESSION["del"] = "delete";
?>