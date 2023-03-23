<?php
    // 구구단 2단을 while문으로 작성해 주세요.
    $n = 1;
    $num = 2;

    while( $n < 10){
        echo "$num * $n = ".$num * $n++."\n";
    }

    // 구구단 1단 ~ 9단까지 while문으로 작성해 주세요.
    $n = 1;
    $dan = 1;
    while($dan < 10){
        echo $dan."단\n";
        while($n < 10){
            echo "$dan * $n = ".$dan * $n++."\n";
        }
        $n = 1;
        $dan++;
    }
?>