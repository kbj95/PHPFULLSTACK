<?php
    // 1."I am always Hello." 에서 "Hello"를 "Happy"로 바꾸어 출력하는 프로그램을 구현

    // 1-1
    // $str_1 = "I am always Hello.";
    // $str_2 = "Happy";
    // $str_sub = mb_substr($str_1, 0 , 12);
    // $str_change = $str_sub.$str_2.".";
    // echo $str_change."\n";

    // 1-2
    // $str_a = "I am always Hello.";
    // $str_b = "Happy";
    // $arr_a = explode(" ",$str_a); // 
    // unset($arr_a[3]);
    // $str_ab = implode(" ",$arr_a);
    // $str_change = $str_ab." ".$str_b.".";
    // echo $str_change."\n";

    // 1-3
    // $str_div = "I am always Hello.";
    // sscanf($str_div, "%s %s %s %s", $str_1, $str_2, $str_3, $str_4);
    // $str_4 = "Happy";
    // $str_change = $str_1." ".$str_2." ".$str_3." ".$str_4.".";
    // echo $str_change."\n";

    // 1-4
    // $str_all = "I am always Hello.";
    // $str_expl = explode("Hello", $str_all);
    // $str_impl = implode("Happy", $str_expl);
    // echo $str_impl;

    // 2. 함수명 : my_str_replace
        // 리턴값 : String $result_str

    // function my_str_replace($a){

    //     $expl_str = explode("Hello", $a);
    //     $return_str = implode("Happy", $expl_str);
    //     return $return_str;
    // }
    // $result = my_str_replace("i am always Hello.");
    // echo $result;

        // 재사용성 개선
        $str = "I am always Happy.";
        function my_str_replace($param_str,$pram_separator,$param_ch){

            $arr_expl = explode($param_separator, $param_str);
            $return_str = implode($param_ch, $arr_expl);
            return $result_str;
        }

        //echo my_str_replace();

        // PHP 함수 : str_replace
        echo str_replace("Hello","Happy",$str);

?>