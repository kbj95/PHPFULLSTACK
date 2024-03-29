<?php
    class Car
    {
        /*
                $car_name : 차이름을 저장 하는 멤버변수
                $car_color : 차 색깔을 저장하는 멤버변수

                method명 : car_make
                parameter : 
                            string $param_name
                            string $param_color
                기능 : 멤버변수에 값을 셋팅

                method명 : car_out
                parameter : 없음
                기능 : 자동차 이름과 색깔을 출력
                    (형식 : $car_color."색".$car_name)
        */
        //클래스 멤버 변수
        public $car_name;
        public $car_color;

        //method
        public function car_make( $param_color, $param_name)
        {
            $this->car_name=$param_name;
            $this->car_color=$param_color;
        }

        public function car_out()
        {
        
            $result_car = $this->car_color."색"." ".$this->car_name;

            echo $result_car;
        }
    }

    $obj_Car = new Car;
    $obj_Car -> car_make("파란","레이");
    $obj_Car -> car_out();
?>