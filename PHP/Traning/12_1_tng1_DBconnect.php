<?php

// 사번이 10005 이하 사원의 사번, 이름(성이름), 성별, 생일

$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306);

$result_query = mysqli_query( $dbc, "SELECT emp_no, CONCAT(last_name,' ',first_name) AS NAME , gender, birth_date FROM employees WHERE emp_no <= 10005;");

// 1.var_dump로 출력
// while ( $temp_row = mysqli_fetch_assoc($result_query) )
// {
//     var_dump($temp_row);
// }

// 2.echo로 출력
// while ( $temp_row = mysqli_fetch_assoc($result_query) )
// {
//     echo "\n";
//     foreach ($temp_row as $key => $val) {
//         echo $key." : ".$val." ";
//     }
// }
    // 2-2. 강사님 버전
    // while ( $tmp_row = mysqli_fetch_assoc($result_query) )
    // {
    //     echo implode( " ", $tmp_row),"\n";
    // }


// 3. 결과값이 없을 경우 "데이터가 0건 입니다."출력하기
if( mysqli_num_rows( $result_query ) === 0 )
{
    echo "데이터가 0건 입니다.";
}
else {
    while ( $tmp_row = mysqli_fetch_assoc($result_query) )
    {
        echo implode( " ", $tmp_row),"\n";
    }
}
// 3-1.플레그를 이용하는 방법
// $flg_cnt = false;
// while( $tmp_row = mysqli_fetch_assoc($result_query))
// {
//     echo implode(" ", $tmp_row,"\n");
//     $flg_cnt = true;
// }
// if( !$flg_cnt)
// {
//     echo "데이터가 0건 입니다.";
// }

// mysqli_close($dbc);

?>