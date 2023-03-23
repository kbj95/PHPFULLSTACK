<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>게임</h1>
</body>
</html>
<?php
    // 0~10사이의 숫자 랜덤으로 받기 echo rand(0,10);

    // 가위바위보 만들기
    // 가위 = 0 바위 = 1 보 = 2

    $user = 1;
    $com = rand(0,2);
    $draw = "비겼습니다!";
    $win = "당신이 이겼습니다!";
    $lose = "당신이 졌습니다 ㅠ_ㅠ";
    $blank = " ";
    
    if($user < 0 || $user > 2){
        echo "잘못된 선택을 하셨습니다.";
    }
    // 컴퓨터가 가위(0)를 냈을경우
    else if($com == 0){
        // 사용자가 가위를 냈을경우
        if($user == 0){
            $com = "가위";
            $user = "가위";
            echo $draw.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
        // 사용자가 바위를 냈을경우
        else if($user == 1){
            $com = "가위";
            $user = "바위";
            echo $win.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
        // 사용자가 보를 냈을경우 
        else{
            $com = "가위";
            $user = "보";
            echo $lose.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
    }
    // 컴퓨터가 바위(1)를 냈을경우
    else if($com == 1){
        // 사용자가 가위를 냈을경우
        if($user == 0){
            $com = "바위";
            $user = "가위";
            echo $lose.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
        // 사용자가 바위를 냈을경우
        else if($user == 1){
            $com = "바위";
            $user = "바위";
            echo $draw.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
        // 사용자가 보를 냈을경우 
        else{
            $com = "바위";
            $user = "보";
            echo $win.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
    }
    // 컴퓨터가 보(2)를 냈을경우
    else if($com == 2){
        // 사용자가 가위를 냈을경우
        if($user == 0){
            $com = "보";
            $user = "가위";
            echo $win.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
        // 사용자가 바위를 냈을경우
        else if($user == 1){
            $com = "보";
            $user = "바위";
            echo $lose.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
        // 사용자가 보를 냈을경우 
        else{
            $com = "보";
            $user = "보";
            echo $draw.$blank."컴퓨터:".$com.$blank."사용자:".$user;
        }
    }
?>