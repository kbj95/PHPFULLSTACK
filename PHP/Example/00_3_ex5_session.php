<?php

session_name("kim");
session_start();

var_dump($_SESSION);
var_dump($_COOKIE); // 세션을 시작하면 자동으로 sessionID가 cookie에 저장됨
var_dump("세션ID : ".session_id()); // sessionID를 반환

?>