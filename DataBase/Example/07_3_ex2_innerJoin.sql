1. -- INNER JOIN의 구조
	-- SELECT 컬럼1, 컬럼2
	-- FROM 테이블1 INNER JOIN 테이블2
	-- 	ON 조인 조건
	-- [WHERE 검색조건]

SELECT emp.emp_no, demp.dept_no, emp.first_name
FROM employees AS emp
	INNER JOIN dept_emp AS demp
		ON emp.emp_no = demp.emp_no
LIMIT 10;