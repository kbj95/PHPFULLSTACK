<?php
//TIP
/*********************************
파일명 :
시스템명 :
이력
    v001: 
*********************************/


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

// 원하는 모양으로 찍기
// function print_star($num) // v002 del
function print_star($num,$str) // v002 add
{
    for ($i = 1; $i <= $num; $i ++) { 
        // echo "*"; // v002 del
        echo $str; // v002 add
    }
    echo "\n";
}
// print_star(1,5);
// print_star(2,"r");
// print_star(2);
// print_star(3);
// print_star(4);
// print_star(5);

// 참조파라미터
function fnc_reference2( &$param_str )
{
    echo "2번 : $param_str \n";
    $param_str = "fnc_reference2에서 값 변경";
    echo "3번 : $param_str \n";
}

// $str = "aaa";
// echo "1번 : $str \n";
// fnc_reference2($str);
// echo "4번 : $str \n";

// 1번 aaa
// 2번 aaa
// 3번 fnc_reference
// 4번 fnc_reference

// ------------------ class ------------------
class Food
{
    // 접근 제어 지시자
    // public   : 어디서든(class밖에서도) 접근 가능
    // private  : 해당 class내에서만 접근 가능
    // protected: class 자기 자신과 상속 class 내에서만 접근 가능

    // 멤버 변수
    // private $str_name;
    // private $int_price;
    protected $str_name;
    protected $int_price;

    // 메소드
    public function __construct( $param_name,$param_price )
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    }

    public function fnc_print_food()
    {
        $str = $this->str_name." : ".$this->int_price."원";
        echo $str;
    }
    public function fnc_int_price($price)
    {
        $this->int_price = $price;
    }
}

$obj_food = new Food( "탕수육", 10000 );
// echo $obj_food->str_name; // private 멤버변수라서 class밖에서는 쓸수없음
// $obj_food->fnc_print_food();
//Food Class의 멤버 변수 $int_price의 값을 12000 바꾸어 주세요.
// $obj_food->fnc_int_price(12000);
// $obj_food->fnc_print_food();

// 상속 : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용할 수 있다.
class KoreanFood extends Food
{
    protected $side_dish;

    public function __construct( $param_name, $param_price, $param_side_dish)
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
        $this->side_dish = $param_side_dish;
    }

    // 오버라이딩 : 부모 클래스에서 정의된 메소드를 자식클래스에서 재정의
    public function fnc_print_food()
    {
        // $str = $this->str_name." : ".$this->int_price."원\n"."반찬 : ".$this->side_dish."\n";

        parent::fnc_print_food();
        $str = "\n반찬 : ".$this->side_dish."\n"; 
        echo $str;
    }
}

// $obj_korean_food = new KoreanFood( "치킨", 20000, "치킨무");
// $obj_korean_food->fnc_print_food();

// class 예제문제 185p
class People
{
    // 멤버 변수
    protected $name;

    // 메소드
    // public function __construct($param_name)
    // {
    //     $this->name = $param_name;
    // }

    public function set_name($param_set_name)
    {
        $this->name = $param_set_name;
    }
    public function people_print()
    {
        $result_name = "이름 : ".$this->name;
        echo $result_name;
    }
}
class Student extends People
{
    // 멤버 변수
    private $id;

    // 메소드
    public function __construct($param_name,$param_id)
    {
        $this->name = $param_name;
        $this->id = $param_id;
    }
    public function set_id($param_set_id)
    {
        $this->id = $param_set_id;
    }
    public function student_print()
    {
        parent::people_print();
        $add_student = "\n아이디 : ".$this->id;
        echo $add_student;
    }
}


$obj_people = new People("홍길동");
// $obj_people->set_name("김첨지");
// $obj_people->people_print();
$obj_Student = new Student("신유진","금쪽이");
$obj_Student->student_print();

?>  