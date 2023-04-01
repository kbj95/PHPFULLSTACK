<?php

//1.콘솔에 출력
//print "프린트";

//echo "에코";

//print_r(array(1,2,3));

//var_dump(array(3,4,5));

//2.변수 : 정보들을 저장하는 장소
// $int_i = 1;
// $인트 = 1; // 절대 사용하면 안되는 변수명(영어, 숫자, '_' 만 사용할 것)
// $sum = $int_i + 5;

// 스네이크 기법 : 영어 소문자만 사용, 단어사이의 연결은 '_' 로 작성하는 방법 (예 : $arr_food)
// 카멜 기법 : 영어만 사용, 단어 사이의 첫글자로 대문자로 작성 (예 : $arrFood)

// 숫자 10을 변수 $i_ten, 숫자 5를 변수 $i_five, 숫자 8을 $i_eight, 숫자 3을 $i_three 에 저장하고,
// 아래 연상을 해주세요.
//  10 - 5 + 8 하고, 3으로 나눈 나머지를 구해주세요.
$i_ten = 10;
$i_five = 5;
$i_eight = 8;
$i_three = 3;
$result_i = ($i_ten - $i_five + $i_eight) % $i_three;

//echo $result_i;

// 증가 연산자, 감소 연산자
$i_increase = 0;
$i_decrease = 0;

++$i_increase; // 전위 증가 연산자
$i_increase++; // 후위 증가 연산자

--$i_decrease; // 전위 감소 연산자
$i_decrease--; // 후위 감소 연산자
//echo $i_increase;

$i_increase = 0;
//echo ++$i_increase;
//echo $i_increase++;

//echo $i_increase;

// 대입 연산자
$i = 0;

$i = $i +2;
$i += 2;
$i -= 1;
$i *= 3;
$i /= 4;
$i = 6;
$i %= 6;

$str = "aa";
$str = $str."aa";
$str .= "bb";
//echo $str;


//비교 연산자
//$a < $b  : a가 b보다 작다, b가 a보다 크다
//$a > $b  : a가 b보다 크다, b가 a보다 작다
//$a <= $b : a가 b보다 작거나 같다, b가 a보다 크거나 같다
//$a >= $b : a가 b보다 크거나 같다, b가 a보다 작거나 같다
//$a != $b : a와 b의 값이 다르다
//$a !== $b : a와 b의 값과 데이터형식 다르다
//$a == $b : a와 b의 값이 같다
//$a === $b : a와 b의 값과 데이터형식 같다

$a = 1;
$b = "1";
//var_dump( $a != $b );
//var_dump( $a !== $b );

// 데이터를 비교할 떄는 데이터 형식까지 비교해야 버그가 줄어듭니다.
//var_dump( false == 0 );
//var_dump( true == 1 );

// 논리 연산자
// && (and연산자) : 모든 조건이 만족해야할 때 사용
$i = 1;
//var_dump( $i === 1 && $i <= 1 && $i > 0 );

// || (or연산자)  : 여러 조건중 하나만 만족할 때 사용
$i = 1;
//var_dump( $i === 2 || $i < 1 || $i > 1 );

// !  (not연산자) : 결과를 반전시킬 때 사용
$i = 1;
//var_dump( !($i === 2) );

// 삼항연산자 : 조건 ? 참일 경우 : 거짓일 경우
$i = 1;
$str = "";
$i < 0 ? $str = "000" : $str = "111";
//echo $str;

// 삼항 연산자를 이용해서 짝수일때는 "짝수"를 출력
// 홀수 일때는 "홀수"를 출력하는 프로그램을 만들어 주세요.
$i = 4;
$str = "";
$i % 2 === 0 ? $str = "짝수" : $str = "홀수";
// echo $str;

//-----------------------------------------------------------------------------
// 보강 2 
//-----------------------------------------------------------------------------

// 1.if문
// $i = 1;
// if( $i % 2 === 0)
// {
//     echo "짝수";
// }
// else{
//     echo "홀수";
// }

// $i = 1;
// if( $i === "1" )
// {
//     echo "문자열 1입니다";
// }
// else if( $i === 1 )
// {
//     echo "숫자 1입니다.";
// }
// else {
//     echo "1이 아닙니다.";
// }

// 1-1.if문 실습
// 과목의 종류는 국어, 영어, 수학, 과학
// 평균점수가 60점 이상이고, 각 과목별 점수가 40점 이상 일 때 "합격"을 출력
// 그외는 "불합격"을 출력하는 프로그램을 만들어 주세요.
$subject = array(
    "ko" => 40
    ,"en" => 40
    ,"math" => 40
    ,"science" => 40
);
$avg_subject = ($subject["ko"] + $subject["en"] + $subject["math"] + $subject["science"]) / count($subject);

if($avg_subject >= 60 && $subject["ko"] >= 40 && $subject["en"] >= 40 && $subject["math"] >= 40 && $subject["science"] >= 40)
{
    // echo "합격입니다";
}
else{
    // echo "불합격입니다";
}

// 2.switch문
// $str_loc 에 지역명을 저장하고,
// 서울은 "서울사람",대구는 "대구사람",부산은 "부산사람",그 외는 "타지역 사람"을 출력하는 프로그램
$str_loc = "대구";

// switch( $str_loc ){
//     case "서울" : 
//         echo "서울사람";
//         break;
//     case "부산" :
//         echo "부산사람";
//         break;
//     case "대구" :
//         echo "대구사람";
//         break;
//     default:
//         echo "타지역 사람";
//         break;
// }

// 3.반복문 : while, for, do_while, foreach
    // 3-1.while : 조건을 체크하고 연산을 실행하는 루프
    // $i = 1;
    // while ( true ) // 참일경우에 실행이된다.
    // {
    //     echo $i;
    //     break;
    // }

    // 3-2.do-while문 : 연산을 실행하고 조건을 체크하는 루프
    // $i = 1;
    // do{
    //     echo $i;
    // } while ( $i !== 1 );

    // 3-3.for문 : 시작과 끝을 우리가 지정해주는 루프(루프의 횟수를 지정가능)
    // for($i = 0; $i < 5; $i++)
    // {
    //     echo $i."\n";
    // }

    // 3-3.for문 연습문제
    // 1 ~ 50까지 , 반복문을 이용해서 더하는 프로그램을 만들어주세요
    $sum = 0;
    for ($i = 1; $i  <= 50; $i ++) {  
        $sum += $i;
    }
    // echo $sum;
    $i = 1;
    $result_sum = 0;
    while( $i <= 50 ){
        $result_sum += $i;
        $i++;
    }
    // echo $result_sum;

    //---------------------------------------------------------------
    // 보강 3
    //---------------------------------------------------------------
    // 배열
    $arr_i = array(1,2,3);
    // var_dump($arr_i);
    // echo $arr_i[1];

    // 연상배열
    // 키값 : std_no, std_name, std_age, std_gender
    $arr_acc = array(
        "std_no" => 2
        ,"std_name" => "권봉정"
        ,"std_age" => 29
        ,"std_gender" => "여자"
    );
    // var_dump($arr_acc);
    // echo $arr_acc["std_name"]; // value값으로 key찾는 함수 : array_search("value값",변수명(=$arr_acc) );
    $arr_acc = array(
        "std_no" => 2
        ,"std_name" => "권봉정"
        ,"std_age" => 29
        ,"std_gender" => "여자"
        // ,"std_secret_info" => array (
        //                             "std_city_no" => 0704
        //                             ,"std_addr" => "대구 중구 중앙대로"
        //                         )
        );
    // echo $arr_acc["std_secret_info"]["std_addr"]." / ".$arr_acc["std_age"]."세";

    // foreach문 : 배열을 루프해서 연산을 하고 싶을 때 사용
    // foreach ($arr_acc as $key => $value) {
    //     echo $key." : ".$value."\n";
    // }
    // 루프를 돌려서 나이만 출력되게 프로그램을 만들어 주세요.
    foreach ($arr_acc as $key => $value) {
        if( $key === "std_age"){
            $std_age = $value + 10;
        }
    }
    // echo $std_age;
    foreach($arr_acc as $key => $value)
    {
        if( $key === "std_age")
        {
            $arr_acc[$key] += 10;
        }
    }
    // echo $arr_acc["std_age"];
    // print_r($arr_acc);

    // 함수 : 사용하는 이유는 재사용성 증가, 가독성 증가
    //----------------------------------------------
    // 함수명   : 
    // 기능     :
    // 피라미터 :
    // 리턴     : 
    //----------------------------------------------
    function clean_class_room($param_name,$param_loc)
    {
        // echo $param_name."씨, ".$param_loc."을(를) 청소해 주세요.";
        $result_str = $param_name."씨, ".$param_loc."을(를) 청소해 주세요.";
        return $result_str;
    }
    
    // echo clean_class_room("동호","책상");

    // 함수 연습문제
    //----------------------------------------------
    // 함수명   : my_sum_all
    // 기능     : 1부터 지정숫자까지의 합을 구해서 리턴
    // 피라미터 : $param_int int
    // 리턴     : $result_int int
    //----------------------------------------------
    function my_sum_all($param_int)
    {
        $result_int = 0;
        for($num = 1; $num <= $param_int; $num++)
        {
            $result_int += $num;
        }
        return $result_int;
    }
    echo my_sum_all(500000);

?>