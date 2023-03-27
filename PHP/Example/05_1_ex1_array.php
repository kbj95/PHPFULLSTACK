<?php
    //test test
    $num = 10; 
    $num = 11;

    // 1. 배열 array
    $week = array("Sun","Mon","Tue","Wed"); //array(0,1,2,3 ...)
    // echo $week[0]; // Sun 이 출력

    $mon = "Mon";
    $sun = "Sun";
    $tue = "Tue";
    $wed = "wed";
    $week1 = array($mon,$sun,$tue,$wed);
    $week2 = array($week[0],$week[1],$week[2],$week[3]);
    // echo $week2[0];

    // Mon, Wed, Sun, Tue 순서로 $week2를 변경
    $week2 = array($week[1],$week[3],$week[0],$week[2]);
    // echo $week2[0]." ".$week2[1]." ".$week2[2]." ".$week2[3];

    // 2. 멀티타입 배열
    $arr_mult_type = array("aaa", 1, 3.14, 'a');
    // echo $arr_mult_type[2];
    // var_dump($arr_mult_type);

    // 3. 연상 배열 (중요!)
    $arr_ass = array("key1" => "val1"
                    , "key2" => "val2"
                    , 5 => "val3"); // 연상배열에서 키값은 꼭 문자열이 아니어도 된다.
    // echo $arr_ass[5];
    
    // 4. 다차원 배열
    $arr_temp = array(
                    array(1, 2, 3, 4)
                    ,array(5, 6, 7, 8)
                    ,array(
                        array(9, 10, 11)
                    )
                );
    // echo $arr_temp[0][1]; // 2
    // echo $arr_temp[1][3]; // 8
    // echo $arr_temp[2][0][1]; // 10
    // echo $arr_temp[2][0][0]; // 9
    
    $arr_temp_3 = $arr_temp[2];
    $arr_temp_3_c = array(
                        array(9,10,11)
                    );
    // echo $arr_temp_3_c[0][2];
    // 5.배열의 원소 삭제 : unset()
    $arr_week = array("Sun","Mon","delete","Tue","Wed");
    unset($arr_week[2]); // unset
    print_r($arr_week); // 키값까지 같이 사라져서 key인 2와 value "delete"가 모두 사라 

?>