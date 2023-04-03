<?php
// php.ini 들어가서 extension=pdo_mysql 주석해제하고 서비스에서 아파치 다시시작

$db_host = "localhost"; // host
$db_user = "root"; // user
$db_password = "root506"; //password
$db_name = "employees"; // DB name
$db_charset = "utf8mb4"; //charset
$db_dns = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset; //오타주의
$db_option =
    array(
        PDO::ATTR_EMULATE_PREPARES => false // DB의 prepared Statement 기능을 사용하도록 설정
        ,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정
    );

// PDO Class로 DB 연동
$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option);

// SELECT 예제
// 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요.
// $sql =
//     "SELECT "
//     ." sal.salary "
//     ." ,emp.emp_no "
//     ." ,emp.birth_date"
//     ." FROM "
//     ." employees AS emp "
//     ." INNER JOIN salaries AS sal "
//     ."     ON emp.emp_no = sal.emp_no "
//     ." WHERE "
//     ." ( "
//     ."      emp.emp_no = :emp_no1 "
//     ."      OR emp.emp_no = :emp_no2 "
//     ." ) "
//     ." AND sal.to_date >= NOW() ";

// $arr_prepare =
//     array(
//         ":emp_no1" => 10001
//         ,":emp_no2" => 10002
//     );

// $stmt = $obj_conn->prepare( $sql ); // prepare Statement를 생성
// $stmt->execute( $arr_prepare ); // 쿼리 실행
// $result = $stmt->fetchAll(); // 쿼리 결과를 fetch
// var_dump($result);
// $result 배열로 풀어 정리하면
// $result =
//     array(
//         array(
//             "salary" => 88958
//             ,"emp_no" => 10001
//             ,"birth_date" => "1953-09-02"
//         )
//         ,array(
//             "salary" => 72527
//             ,"emp_no" => 10002
//             ,"birth_date" => "1964-06-02"
//         )
//     );

// foreach ($result as $val) //$val = array("salary"=>..., "emp_no"=>..., ...)
// {
//     echo $val["salary"],"\n";
// }


// INSERT 예제
$sql =
    " INSERT INTO departments( "
    ." dept_no "
    ." ,dept_name"
    ." ) "
    ." VALUES( "
    ." :dept_no "
    ." ,:dept_name "
    ." ) ";

$arr_prepare =
    array(
        ":dept_no" => "d011"
        ,":dept_name" => "PHP풀스택"
    );

$stmt = $obj_conn->prepare( $sql );
$result = $stmt->execute( $arr_prepare );
$obj_conn->commit();
// var_dump($result);

$obj_conn = null; // DB 파기
?>