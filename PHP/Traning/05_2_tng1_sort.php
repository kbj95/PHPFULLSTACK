<?php
    // 1. 연습 "키 > 값" 만들기
    // $arr = array(5, 10, 7, 3, 1);

    // foreach ($arr as $key => $val) {
    //     echo $key." > ".$val."\n";
    // }

    // for ($i=0; $i < count($arr); $i++) { 
    //     echo $i." > ".$arr[$i]."\n";
    // }

    // 2. 값을 기준으로 정렬하기
    // $arr = array(5, 15, 7, 3, 1);
    // $count = count($arr);
    
    // for ($a = 0; $a < $count; $a++) { 
    //     for ($b = 0; $b < $a; $b++)
    //     { 
    //         if($arr[$a] < $arr[$b])
    //         {
    //             $temp = $arr[$a];
    //             $arr[$a] = $arr[$b];
    //             $arr[$b] = $temp;
    //         }
    //     }
    // }
    // print_r($arr);

    // 3.배열 안에 최대 값, 최소 값을 출력해주는 함수를 각각 구현해 주세요.
    // 함수명은 "my_max","my_min"
    // $arr = array(5, 10, 7, 3, 1);
    
    // 최대값 구하기1
    // function my_max($arr)
    // {
    //     $count = count($arr);
    //     for ($a = 0; $a < $count; $a++) { 
    //         for ($b = 0; $b < $a; $b++)
    //         { 
    //             if($arr[$a] < $arr[$b])
    //             {
    //                 $temp = $arr[$a];
    //                 $arr[$a] = $arr[$b];
    //                 $arr[$b] = $temp;
    //             }
    //         }
    //     }
    //     echo $arr[count($arr)-1];
    // }
    // my_max($arr);
    
    // 최대값 구하기2
    // $arr = array(5555, 110, 717, 35, 1);
    // function my_max1($arr)
    // {   
    //     $count = count($arr);
    //     $max = $arr[0];
    //     for ($i= 1; $i < $count; $i++) { 
    //         if ($max < $arr[$i]){
    //             $max = $arr[$i];
    //         }
    //     }
    //     return $max;
    // }
    // echo my_max1($arr);

    // 최소값 구하기
    $arr = array(0, 110, 1, 35, 10);
    function my_min($arr){
        $min = $arr[0];
        for ($i = 1; $i < count($arr); $i++) { 
            if($min > $arr[$i]){
                $min = $arr[$i];
            }
        }
        return $min;
    }
    // echo my_min($arr);
?>