<?php
// DB 연결
$dbc = mysqli_connect( "localhost", "root", "root506","employees", 3306 );
// var_dump($dbc);

// 쿼리 요청
// $result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 5;");
// var_dump($result_query);

// $result_row = mysqli_fetch_row( $result_query );
// var_dump($result_row);

// prepared Statement :
$i1 = "F";
$i2 = 10010;
$i3 = 5;
$result = null;
$stmt = $dbc->stmt_init(); // statement를 셋팅
$stmt->prepare( "SELECT emp_no, first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT ?" ); // DB 질의 할 쿼리를 작성
$stmt->bind_param("sii", $i1, $i2, $i3); // prepare 셋팅 "i"= int, "s" =string.즉 " "안에는 type
$stmt->execute(); // DB에 쿼리 질의 실행
// $stmt->bind_result( $col1, $col2 ); // 질의 결과를 각 아규먼트($col1, $col2 )에 저장하기 위한 셋팅
// $stmt->fetch(); // bind_result에서 셋팅한 아규먼트에 값을 저장(한번 실행 될때마다 한 레코드씩 저장)
// var_dump( $col1, $col2 );

// 패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
// while( $stmt->fetch() )
// {
//     echo "$col1 $col2\n";
// }

// ------------- 이하 연상배열로 가져오는 받법 ----------
$result = $stmt->get_result(); // 질의 결과를 저장

// 패치를 루프로 돌려서 모든 질의 결과를 키값도 알수 있게 가져오는 방법
while( $row = $result->fetch_assoc() )
{
    // var_dump($row);
    echo $row["emp_no"]." ".$row["first_name"]."\n";
}

// DB 연결 종료
mysqli_close($dbc);

// 결과를 루프로 돌려서 모두 가져오는 방법
// while ($temp_row = mysqli_fetch_row( $result_query ))
// {
//     var_dump($temp_row);
// }

// while ( $temp_row = mysqli_fetch_assoc( $result_query ))
// {
//     // var_dump($temp_row);
//     var_dump($temp_row["first_name"]);
// }

?>