<?php
//1.반복문을 이용해서 아래와 같이 출력해 주세요
//갯수는 내가 입력한 갯수만큼

// 삼각형1
// *
// **
// ***
// ****
// *****
// ******
$in_num = 6;
for( $for1 = 1; $for1 <= $in_num; $for1++){
    for( $for2 = 0; $for2 < $for1; $for2++){
        echo "*";
    }
    echo "\n";
}
// 삼각형2
//      *
//     **
//    ***
//   ****
//  *****
for( $n1 = 1; $n1 < 6; $n1++){
    for( $n2 = 5; $n1 < $n2; $n2--){
        echo " ";
    }
    for( $n2 = 0; $n1 > $n2; $n2++){
        echo "*";
    }
    echo "\n";
}

// 트리모양
// for ($r = 0; $r < 10; $r++){
//     for ($b = 1 ; $b < 10 - $r ; $b++) { 
//         echo " ";
//     }
//     for ($c = 0; $c < $r + 1 ; $c++){ 
//         echo "*";
//     }
//     for ($c = 1; $c < $r + 1 ; $c++){ 
//     echo "*";
//     }
//     echo "\n";
// }

// for ($r = 0; $r < 10; $r++){ 
//     echo str_repeat("*", $r)."\n";
// }
// for ($r = 10; $r > 0; $r--){ 
//     echo str_repeat("*", $r)."\n";
// }

// 마름모
// for ($r = 0; $r < 10; $r++){
//     for ($b = 1 ; $b < 10 - $r ; $b++) { 
//         echo " ";
//     }
//     for ($c = 0; $c < $r + 1 ; $c++){ 
//         echo "*";
//     }
//     for ($c = 1; $c < $r + 1 ; $c++){ 
//     echo "*";
//     }
//     echo "\n";
// }
// for ($r = 0; $r < 9; $r++){
//     for ($b = 0 ; $b < $r + 1 ; $b++) { 
//         echo " ";
//     }
//     for ($c = 0; $c < 9 - $r ; $c++){ 
//         echo "*";
//     }
//     for ($c = 1; $c < 9 - $r ; $c++){ 
//     echo "*";
//     }
//     echo "\n";
// }

?>