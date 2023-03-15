SELECT CAST( '1234' AS CHAR(4));
SELECT CONVERT( 1234, CHAR(4));

SELECT emp_no, IF( emp_no = 10001 , first_name , birth_date )
FROM employees;

SELECT IFNULL(NULL, 'a');
SELECT IFNULL(' ', 'aa');

SELECT NULLIF(1 , 1);

-- SELECT
		CASE 체크하려는 수식1
-- 				WHEN 분기수식1 THEN 결과1
-- 				WHEN 분기수식2 THEN 결과2
-- 				WHEN 분기수식3 THEN 결과3
-- 				ELSE 결과4
-- 			END
SELECT
	emp_no
	,gender
	,case gender
		when 'M' then '남자'
		when 'F' then '여자'
		ELSE ' '
	END
FROM employees LIMIT 10;

SELECT
	emp_no
	,CASE title
		WHEN 'Senior Engineer' THEN '관리자'
		ELSE '팀원'
	END AS 'k_title'
FROM titles;
