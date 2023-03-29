<?php

    // 1.$a + $b 를 더한 후 출력
    $a = 1;
    $b = 2;
    $result = $a + $b;

    // echo $result;

    // 2.fnc_add 함수를 만든후 결과 호출
    function fnc_add( $int_a, $int_b )
    {
        $sum = $int_a + $int_b;
        
        return $sum;
    }

    // fnc_add 함수를 호출
    $result_add = fnc_add(10,9);

    // echo $result_add;

    // 3.가변 파라미터 함수
    function fnc_args_add()
    {   
        $args = func_get_args(); //func_get_args 함수를 사용해서 가변 파라미터 습득
        $sum = 0; //더하기 결과 저장 변수

        // 루프 : 더하기 실행
        foreach ($args as $val) {
            $sum += $val;
        }

        return $sum;
    }

    // echo fnc_args_add(1, 2, 3, 4);

    // 4.재귀함수
    function rcc( $param_a )
    {
        if( $param_a === 1 )
        {
            return 1;
        }
        return $param_a * rcc( $param_a - 1 );
    }

    // echo rcc(4);

    // 5.return 함수 (리턴값이 있는)
    function sum2($n1,$n2){
        return $n1 + $n2;
    }
    sum2(3,6); // 9
    $result = sum2(3,6); // $result = 9 
    echo $result;

    // 6.void 함수 (리턴값이 없는)
    // 매개변수(=파라미터) 여기서는 $n1과 $n2가 매개변수
    function sum($n1,$n2){
        echo $n1 + $n2;
        return;
    }
    // sum(1,2); // 호출할때 함수만 적기 echo 금지
?>