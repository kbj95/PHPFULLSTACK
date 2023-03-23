<?php
    // IF로 만들어주세요.
    // 성적
    //     범위 :
    //         이상 ~ 미만
    //         100 : A+
    //         90~100 : A
    //         80~90 : B
    //         70~80 : C
    //         60~70 : D
    //         60미만 : F
    // 출력 문구 : "당신의 점수는 XXX점 입니다. <등급>"

    $score = "100";
    $text1 = "당신의 점수는";
    $text2 = "점 입니다";
    $blank = " ";
    $grade = "";

    // 문제1. 100점은 A+ 순차적으로 내려오기
    // if($score == 100){
    //     echo $text1.$blank.$score.$text2.$blank."<A+>";
    // }
    // else if($score >= 90 && $score < 100){
    //     echo $text1.$blank.$score.$text2.$blank."<A>";
    // }
    // else if($score >= 80 && $score < 90){
    //     echo $text1.$blank.$score.$text2.$blank."<B>";
    // }
    // else if($score >= 70 && $score < 80){
    //     echo $text1.$blank.$score.$text2.$blank."<C>";
    // }
    // else if($score >= 60 && $score < 70){
    //     echo $text1.$blank.$score.$text2.$blank."<D>";
    // }
    // else{
    //     echo $text1.$blank.$score.$text2.$blank."<F>";
    // }

    // 문제2. 0 ~ 100사이의 점수가 아닐경우는 "잘못된 값을 입력하셨습니다" 출력
    // if($score >= 0 && $score <=100){
    //     if($score == 100){
    //         echo $text1.$blank.$score.$text2.$blank."<A+>";
    //     }
    //     else if($score >= 90 && $score < 100){
    //         echo $text1.$blank.$score.$text2.$blank."<A>";
    //     }
    //     else if($score >= 80 && $score < 90){
    //         echo $text1.$blank.$score.$text2.$blank."<B>";
    //     }
    //     else if($score >= 70 && $score < 80){
    //         echo $text1.$blank.$score.$text2.$blank."<C>";
    //     }
    //     else if($score >= 60 && $score < 70){
    //         echo $text1.$blank.$score.$text2.$blank."<D>";
    //     }
    //     else{
    //         echo $text1.$blank.$score.$text2.$blank."<F>";
    //     }
    // }
    // else{
    //     echo "잘못된 값을 입력 했습니다.";
    // }

    // 문제2 - 1. 중복되는 단어 변수로 지정해서 간단하게 적기
    // if($score >= 0 && $score <=100){
    //     if($score == 100){
    //         $grade = "A+";
    //     }
    //     else if($score >= 90 && $score < 100){
    //         $grade = "A";
    //     }
    //     else if($score >= 80 && $score < 90){
    //         $grade = "B";
    //     }
    //     else if($score >= 70 && $score < 80){
    //         $grade = "C";
    //     }
    //     else if($score >= 60 && $score < 70){
    //         $grade = "D";
    //     }
    //     else{
    //         $grade = "F";
    //     }
    //     echo $text1.$blank.$score.$blank.$text2.$blank."<".$grade.">";
    // }
    // else{
    //     echo "잘못된 값을 입력하셨습니다.";
    // }

        // 문제2 - 2 속도줄이기
        if($score < 0 || $score > 100){
            echo "잘못된 값을 입력하셨습니다.";
        }
        else{
            if($score == 100){
                $grade = "A+";
            }
            else if($score >= 90 && $score < 100){
                $grade = "A";
            }
            else if($score >= 80 && $score < 90){
                $grade = "B";
            }
            else if($score >= 70 && $score < 80){
                $grade = "C";
            }
            else if($score >= 60 && $score < 70){
                $grade = "D";
            }
            else{
                $grade = "F";
            }
            echo $text1.$blank.$score.$blank.$text2.$blank."<".$grade.">";
        }
?>