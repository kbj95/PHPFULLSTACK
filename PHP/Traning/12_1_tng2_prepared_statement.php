<?php
// 아래 쿼리로 결과를 출력하는 프로그램을 만들어 주세요.

// ----- 쿼리 -----
// SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?

// ----- prepare 셋팅값 -----
// to_date : "9999-01-01"
// salary : 50000
// LIMIT : 5

$dbc = mysqli_connect( "localhost", "root", "root506","employees", 3306 ); // DB연결

$to_date = "9999-01-01";
$salary = 50000;
$limit = 5;

$stmt = $dbc->stmt_init(); // mysqli_stmt_prepare를 사용하기 위한 객체를 초기화하고 리턴해 줍니다.
$stmt->prepare( "SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?" ); // 질의 할 쿼리
$stmt->bind_param("sii", $to_date, $salary, $limit); //prepared statement의 값을 셋팅 
$stmt->execute(); // 쿼리 실행

// 연상배열로 가져오기
$result = $stmt->get_result(); // 질의 결과 저장
while($row = $result->fetch_assoc())
{
    // var_dump($row);
    echo "사번:".$row["emp_no"]." / "."월급:".$row["salary"]."\n";
}

// 모든 질의 결과 가져오기
// $stmt->bind_result( $col1, $col2 );
// while( $stmt->fetch() )
// {
//     echo $col1." ".$col2."\n";
// }

mysqli_close($dbc);
// $dbc->close(); //DB 연결 종료하는 또다른 방법

?>