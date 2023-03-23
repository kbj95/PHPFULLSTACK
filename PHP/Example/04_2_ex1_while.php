<?php
    //1. while문
    // while( 조건 )
    // {
    //     반복하고 싶은 처리
    // }
    // $i = 0;
    // while( $i < 10 )
    // {
    //     echo $i++;
    // }

    //2. do while문
    // do{
    //     반복 할 처리
    // }
    // while( 조건 );

    // $i = 0;
    // do{
    //     echo $i, " do while";
    // }
    // while( $i === 1 );

    // while ( $i === 1 ){
    //     echo $i, "while";
    // }

    //3. for문
    // for ( 시작; 조건; 증가/증감 연산자){
    //     반복 하고 싶은 처리;
    // }
    for ( $i = 2; $i <= 9; $i++){
        echo $i."단\n";
        for ($n = 1; $n <=9 ; $n++) { 
            echo "$i * $n = ".$i * $n."\n";
        }
    }
?>