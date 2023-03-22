<?php
    //산술 연산자를 이용해서 계산해주세요.(각각의 )
    $tng_num = 10;
    
    echo "tng_num에 10을 더해주세요 $tng_num + 10 = ", $tng_num + 10; // 10 + 10 = 20
    echo "\n";
    echo "tng_num에 5로 나누어주세요 $tng_num / 5 = ", $tng_num / 5; // 10 / 5 = 2
    echo "\n";
    echo "tng_num에 4를 빼주세요 $tng_num - 4  = ", $tng_num - 4; // 10 - 4 = 6
    echo "\n";
    echo "tng_num에 7로 나눈 나머지를 구해주세요 $tng_num % 7  = ", $tng_num % 7; // 10 % 7 = 3
    echo "\n";
    echo "tng_num에 3을 곱해주세요 $tng_num * 3  = ", $tng_num * 3; // 10 * 3 = 30
    echo "\n\n";

    //산술 대입 연산자를 이용해서 계산해주세요.
    $tng_num = 10;
    echo "tng_num에 10을 더해주세요 \$tng_num + 10 = ", $tng_num += 10; // 10 + 10 = 20 (변수값이 10에서 20으로)
    echo "\n";
    echo "tng_num에 5로 나누어주세요 \$tng_num / 5 = ", $tng_num /= 5; // 20 / 5 = 4
    echo "\n";
    echo "tng_num에 4를 빼주세요 \$tng_num - 4 = ", $tng_num -= 4; // 4 - 4 = 0
    echo "\n";
    echo "tng_num에 7로 나눈 나머지를 구해주세요 \$tng_num % 7 = ", $tng_num %= 7; // 0 % 7 = 0
    echo "\n";
    echo "tng_num에 3을 곱해주세요 \$tng_num * 3 = ", $tng_num *= 3; // 0 * 3 = 0
?>