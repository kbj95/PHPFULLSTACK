<?php

// 아래 쿼리를 이용해서 DB접속 > data획듣 후 출력해 주세요.
// try-catch로 에러 처리를 해 주세요.
// 에러가 날 경우의 해당 Exception의 에러 메세지를 출력해 주세요.
// 정상 종료일 경우 "정상종료"라고 출력해 주세요.
// $sql1 = " SELECT * FROM department ";
// $sql2 = " SELECT * FROM dept_manager ";

include_once("../Example/12_2_ex2_fnc_db_conn.php");

try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    // $sql1 = " SELECT * FROM department ";
    $sql2 = " SELECT * FROM dept_manager ";
    // $stmt1 = $obj_conn->query( $sql1 );
    $stmt2 = $obj_conn->query( $sql2 );
    // $result1 = $stmt1->fetchAll();
    $result2 = $stmt2->fetchAll();

    echo "정상종료\n";
}
catch( Exception $e )
{
    echo "--------------------ERROR--------------------\n";
    echo $e->getMessage();
    echo "\n--------------------ERROR--------------------\n";
}
finally
{
    $obj_conn = null;
}


?>