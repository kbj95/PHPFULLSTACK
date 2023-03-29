<?php
    // 1.두 매개변수의 차를 구하는 함수를 구현해 주세요.
    // function fnc_minus($int_a, $int_b)
    // {
    //     $result1 = $int_a - $int_b;

    //     return $result1;
    // }

    // 2.두 매개변수를 나눈 함수를 구현해 주세요.
    // function fnc_div($int_c, $int_d)
    // {
    //     $result2 = $int_c / $int_d;

    //     return $result2;
    // }

    // 3.두 매개변수를 곱하는 함수를 구현해 주세요.
    // function fnc_multi($int_e, $int_f)
    // {
    //     $result3 = $int_e * $int_f;

    //     return $result3;

    //     // 또는 return $int_a - $int_b;
    // }

    // 4.각각의 결과를 출력해 주세요.

    // echo fnc_minus(10,6)."\n";
    // echo fnc_div(10,6)."\n";
    // echo fnc_multi(10,6)."\n";

    // $result_minus = fnc_minus(10,2);
    // $result_div = fnc_div(10,2);
    // $result_multi = fnc_multi(10,2);

    // echo $result_minus."\n".$result_div."\n".$result_multi;

    // 5.빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현해 주세요.
    // 빼기 예) fnc( 10 ,2 ,5 ) 결과가 3
    function fnc_minus()
    {
        $fnc = func_get_args();
        $result = 0;
        
        foreach ($fnc as $key => $val) {
            if($key === 0)
            {
                $result = $val;
            }
            else
            {
                $result -= $val;
            }
        }
        
        return $result;
    }
    echo fnc_minus(10,2,5)."\n";

    function fnc_div()
    {
        $fnc = func_get_args();
        $result = 0;
        
        foreach ($fnc as $key => $val) {
            if($key === 0)
            {
                $result = $val;
            }
            else
            {
                $result /= $val;
            }
        }
        
        return $result;
    }
    echo fnc_div(10,2,5)."\n";

    function fnc_multi()
    {
        $fnc = func_get_args();
        $result = 0;
        
        foreach ($fnc as $key => $val) {
            if($key === 0)
            {
                $result = $val;
            }
            else
            {
                $result *= $val;
            }
        }
        
        return $result;
    }
    echo fnc_multi(10,2,5)."\n";

    //강사님 버전
    function fnc_args_minus()
    {
        $result_args = func_get_args();
        $result_minus = null;

        foreach ($result_args as $val) {
            if( is_null($result_minus) )
            {
                $result_minus = $val;
            }
            else
            {
                $result_minus -= $val;
            }
        }
        return $result_minus;
    }
    echo fnc_args_minus(10,2,5);
?>