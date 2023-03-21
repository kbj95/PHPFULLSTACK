	-- DELIMITER $$
	-- CREATE PROCEDURE 프로시저명(
	-- 	IN 변수명 데이터타입 
	-- 	, OUT 변수명 데이터타입 
	-- )
	-- BEGIN
	-- 	프로시저의 실행 내용 정의 
	-- END $$
	-- DELIMITER ;
DELIMITER $$
CREATE PROCEDURE test_proc(
	IN in_num INT
)
BEGIN
	SELECT *
	FROM employees
	LIMIT in_num;
END $$
DELIMITER ;

	-- 프로시저 호출 
	-- CALL 프로시저명(매개변수);
CALL test_proc(10);

	-- 프로시저 삭제 
	-- DROP PROCEDURE 프로시저명 ;
DROP PROCEDURE test_proc;