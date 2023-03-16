-- OUTER JOIN :
-- 	- 기준이 되는 테이블의 레코드는 조인의 조건에 만족되지 않아도 출력
-- SELECT 컬럼1, 컬럼2 ...
-- FROM 테이블1
-- 	[ LEFT | RIGHT | FULL ] OUTER JOIN 테이블2
-- 		ON 조인 조건
-- WHERE 검색조건;

-- mariaDB는 FULL을 지원하지 않음
-- departments 테이블의 칼럼 생략 가능 대신 vvlues 순서대로 적어야함
INSERT INTO departments
VALUES(
	'd010'
	,'test'
);

COMMIT;

SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments dept
	LEFT OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;
		
SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments dept
	RIGHT OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no; -- dept_manager 에 d010 값이 없어서 d010은 나오지않는다
		
	