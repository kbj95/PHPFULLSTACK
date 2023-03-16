-- SELF JOIN : 자기 자신을 조인
-- SELECT 컬럼1, 컬럼2 ...
-- FROM 테이블1
-- 	INNER JOIN 테이블1
-- WHERE 검색조건;

ALTER TABLE employees ADD COLUMN sup_no INT(11);

COMMIT;

SELECT emp2.*
FROM employees emp1
	INNER JOIN employees emp2
		ON emp1.sup_no = emp2.emp_no
WHERE emp1.emp_no = 10001;