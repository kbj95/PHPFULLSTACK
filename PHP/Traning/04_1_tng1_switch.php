<?php
    $score = 0;
    $text1 = "당신의 점수는";
    $text2 = "점 입니다";
    $blank = " ";

    switch ($score) {
        case ($score >= 100):
            echo $text1.$blank.$score.$blank.$text2.$blank."<A+>";
            break;
        case ($score >= 90 && $score < 100):
            echo $text1.$blank.$score.$blank.$text2.$blank."<A>";
            break;
        case ($score >= 80 && $score < 90):
            echo $text1.$blank.$score.$blank.$text2.$blank."<B>";
            break;
        case ($score >= 70 && $score < 80):
            echo $text1.$blank.$score.$blank.$text2.$blank."<C>";
            break;
        case ($score >= 60 && $score < 70):
            echo $text1.$blank.$score.$blank.$text2.$blank."<D>";
            break;
        default:
            echo $text1.$blank.$score.$blank.$text2.$blank."<F>";
            break;
    }
?>