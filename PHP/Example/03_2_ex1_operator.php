<?php
    //1. 산술연산자
    // echo "더하기 : 1 + 1 = ", 1 + 1;
    // echo "\n빼기 : 1 - 1 = ", 1 - 1;
    // echo "\n곱하기 : 2 * 3 = ", 2 * 3;
    // echo "\n나누기 : 10 / 2 = ", 10 / 2;
    // echo "\n나머지 : 9 % 7 = ", 9 % 7;
    // echo "\n연산순서 : 10 - 5 * 8 = ", 10 - 5 * 8;
    // echo "\n\n";

    //2. 증가/감소 연산자
    // $num1 = 1;
    // $num2 = 1;

    // ++$num; //전위 증가 연산자
    // 

    // $num++; //후위 증가 연산자
    //

    //3. 산술 대입 연산자
    // $num1 = 1;
    // $num1 = $num1 +1;
    // $num2 = 1;
    // $num2 += 1;

    // echo $num1, " ",$num2;

    //4. 비교 연산자
    $t1 = 1;
    $t2 = '1';
    // var_dump(1 > 2); //false
    // var_dump(1 < 2); //true
    // var_dump(1 >= 2); //false
    // var_dump(1 <= 2); //true

    // var_dump(1 == '1'); //true 생김새만 같으면 true를 반환
    // var_dump(1 === '1'); //false 데이터형식까지 같아야 true를 반환

    // var_dump($t1 != $t2); //false
    // var_dump($t1 !== $t2); //true

    //5. 논리 연산자
    // 5-1.and 연산자
    var_dump( 1 == 1 && 2==2 ); //true
    var_dump( 1 == 1 && 2==3 ); //false '&&'는 'AND'로 둘다 참이어야 true를 반환

    // 5-2.or 연산자
    var_dump( 1 == 1 || 2 == 2 ); //true
    var_dump( 1 == 1 || 2 == 3 ); //true '||'는 'OR'로 둘 중 하나만 참이여도 true를 반환

    // 5-3.NOT 논리 연산자
    var_dump( !(1==1) ); //false (!(true)), true가 아니다. 즉 false
    
    $i = 1;
    echo $i++;

?>