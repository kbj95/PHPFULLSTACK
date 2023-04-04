<?php

// 1.while + if 조합
// $i = 0;
// while( $i <= 4)
// {
//     if( $i === 1 )
//     {
//         echo "1입니다.";
//     }
//     else if( $i === 4 )
//     {
//         echo "4입니다.";
//     }
//     ++$i;
// }

// 2.foreach + if 조합
// $arr_ass = [ "a" => 1, "b" => 2, "c" => 3];
// // = array("a" => 1, "b" => 2, "c" => 3); 와 같다
// foreach ($arr_ass as $key => $val)
// {
//     if($key === "c" || $val === 2 )
//     {
//         echo "if";
//     }
// }

// 이중 루프
// for($i = 2; $i <= 9; $i++)
// {
//     echo $i."단"."\n";
//     for($n = 1; $n <= 9; $n++)
//     {
//         echo "$i * $n = ".$i * $n."\n";
//     }
// }

// 1 ~ 100 숫자 중에 짝수의 합을 구해주세요.
//
// $sum = 0;
// for($num = 1; $num <= 100; $num++)
// {
//     if($num % 2 === 0) // 짝수
//     {
//         $sum += $num;
//     }
// }
// echo $sum;
//
// $sum = 0;
// $num = 1;
// while( $num <= 100 )
// {
//     if($num % 2 === 0 )
//     {
//         $sum += $num;
//     }
//     $num++;
// }
// echo $sum;

// 배열 값 찾아내기
// $arr_test = array(
//     "a" => 1
//     ,"b" => 2
//     ,"info" => array(
//                     "info_a" => 3
//                     ,"info_b" => 4
//                     ,"info_arr" => 
//                         array(
//                             "f_1" => 5
//                             ,"f_2" => 7
//                             )
//     )
// );
// echo $arr_test["info"]["info_a"];
// echo "\n";
// echo $arr_test["info"]["info_arr"]["f_2"];

// $arr_test = array(
//     1
//     ,2
//     ,array(
//             "info_a" => 3
//             ,"info_b" => 4
//             ,"info_arr" => 
//                         array(
//                             "f_1" => 5
//                             ,"f_2" => 7
//                             )
//     )
// );

// echo $arr_test[2]["info_arr"]["f_1"];

// 함수명 : fnc_sum
//기능 : 파라미터를 더한 값을 리턴
// 파라미터 : INT $param_a
            //INT $param_b
// 리턴값  : INT $sum;

function fnc_sum($param_a,$param_b)
{
    $sum = $param_a + $param_b;
    return $sum;
}

/* 
function fnc_sum2( ...$param_numbers )
{
    // $sum = 0;
    // foreach ($param_number as $val) {
    //     $sum += $val;
    // }
    $sum = array_sum($param_numbers);
    return $sum;
}
echo fnc_sum2(1,2,5,6);
*/

// function fnc_global()
// {
//     global $global_i;
//     $global_i = 0;
// }
// $global_i = 5;
// fnc_global();
// echo $global_i;

// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }

// fnc_static(); //0
// fnc_static(); //1
// fnc_static(); //2

// function fnc_reference( &$param_str )
// {
//     $param_str = "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;

// *
// **
// ***
// ****
// *****
// 함수를 하나 만들고, 호출하여 별찍기 
// for ($i = 1; $i <= 5; $i++){ 
//     echo "/n";
//     for($n = 1; $n <= 5; $n++)
//     {
//         echo "*"."\n";
//     }
// }

for($i = 0; $i <= 5; $i ++){
    echo "*";
}

?>  