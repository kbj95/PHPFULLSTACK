<?php
    // switch 기본구조 
    // switch ($variable) {
    //     case 'value':
    //         # code...
    //         break;
        
    //     default:
    //         # code...
    //         break;
    // }

    $val = 1;

    switch ( $val ) {
        case 0:
            echo "숫자 0입니다.";
            break;
        case 1:
            echo "숫자 1입니다.";
            break;
        default:
            echo "디폴트입니다.";
            break;
    }
?>