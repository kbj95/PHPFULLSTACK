<?php
    // 1.음식종류 5개 이상을 배열로 만들어 주세요.
    $food = array("짜장면","짬뽕","탕수육","깐풍기","동파육");

    // echo $food[0]. $food[1]. $food[2]. $food[3].$food[4];

    // 2.array $food에서 무작위로 값을 출력해 주세요.
    $random = array_rand($food); // 이것만 출력하면 숫자로 나옴
    $rand_num = rand(0,5); // 또는 이렇게 0부터 5까지의 무작위 숫자 출력

    // echo $food[$random];

    // 3.키는 요리명, 값은 주재료 하나 로 이루어진 배열을 만들어주세요.(4개)
    $arr_food = array( "짜장면" => "춘장"
                    ,"탕수육" => "돼지고기"
                    ,"깐풍기" => "닭고기"
                    ,"동파육" => "파");
    // echo $arr_food["깐풍기"];
    
    // 4.키:김치 원소를 삭제해 주세요.
    $arr_ass_del = array(
                        "된장찌개" => "파"
                        ,"볶음밥" => "양파"
                        ,"김치" => "마늘"
                        ,"비빔밥" => "참기름"
                    );
    unset($arr_ass_del["김치"]);
    // print_r($arr_ass_del);

    // 5.foreach문을 이용해서 키가 "삭제"인 요소를 제거해 주세요.
        // if문을 사용 , unset("삭제") 금지
    $arr_ass_del = array(
        "된장찌개" => "파"
        , "볶음밥" => "양파"
        , "삭제" => "값값"
        , "김치" => "마늘"
        , "비빔밥" => "참기름"
    );
    
    foreach($arr_ass_del as $key => $val)
    {
        if($key === "삭제")
        {
            unset($arr_ass_del[$key]);
        }
        else
        {
            echo $key . " : " . $val . "\n";
        }
    }
    print_r($arr_ass_del);
    

?>