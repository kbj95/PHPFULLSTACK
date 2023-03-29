<?php
    // 1. 배열의 길이를 반환하는 my_len() 함수를 작성하시오.

    // $arr_base = array(1, 2, 3, 4, 5);
    // echo count($arr_base);

    $arr_base = array(1,2,3,4,5);

    // echo my_len($arr_base);

    function my_len($arr)
    {
        $result = 0;

        foreach ($arr as $value) {
            $result += 1;
        }
        return $result;
    }

    // 2. 별찍기를 함수로 만들기
    // *
    // **
    // ***
    // ****
    // *****
    // ******

    // 한줄에 몇개의 별을 찍을지 정할 함수
    function print_star($num)
    {
        for( $i = 1; $i <= $num; $i++){
            echo "*";
        }
        echo "\n";
    }

    // 삼각형모양
    function print_star_tri($num)
    {
        for ($i = 1; $i <= $num; $i++) { 
            print_star($i);
        }
    }
    
    // 사각형모양
    function print_star_rect($num)
    {
        for($i = 1; $i <= $num; $i++)
            print_star($num);
    }
    echo print_star_rect(5);
?>