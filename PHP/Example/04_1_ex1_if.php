<?php
    //1. if 기본 형태

    // if( 조건식 ){
    //     조건식이 참일경우 실행문
    // }
    // else{
    //     조건식이 거짓일경우 실행문
    // }

    // if( 1 < 2 ){
    //     echo '참';
    // }
    // else{
    //     echo '거짓';
    // }

    $num = 4;
    if( $num === 0 ){
        echo '0입니다';
    }
    else if( $num === 1 ){
        echo '1입니다';
    }
    else if( $num === 2 ){
        echo '2입니다';
    }
    else if( $num === 3 ){
        echo '3입니다';
    }
    else{
        echo '모르겠다.';
    }
?>