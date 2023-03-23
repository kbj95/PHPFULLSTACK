<?php
//1.반복문을 이용해서 아래와 같이 출력해 주세요
//갯수는 내가 입력한 갯수만큼


for ($r = 0; $r < 10; $r++){
    for ($b = 1 ; $b < 10 - $r ; $b++) { 
        echo " ";
    }
    for ($c = 0; $c < $r + 1 ; $c++){ 
        echo "*";
    }
    for ($c = 1; $c < $r + 1 ; $c++){ 
    echo "*";
    }
    echo "\n";
}
for ($r = 0; $r < 9; $r++){
    for ($b = 0 ; $b < $r + 1 ; $b++) { 
        echo " ";
    }
    for ($c = 0; $c < 9 - $r ; $c++){ 
        echo "*";
    }
    for ($c = 1; $c < 9 - $r ; $c++){ 
    echo "*";
    }
    echo "\n";
}


// for ($r = 0; $r < 10; $r++){ 
//     echo str_repeat("*", $r)."\n";
// }
// for ($r = 10; $r > 0; $r--){ 
//     echo str_repeat("*", $r)."\n";
// }

?>