/* 서브쿼리 : 쿼리 안에 쿼리가 있는 형태 */
--emp_no가 110344인 dept_no = 'd002' 즉  dept_manager 안에 dept_no가 'd002'인 모든 데이터를 보여주세요
SELECT *
FROM dept_manager
WHERE dept_no = (
	SELECT dept_no
	FROM dept_manager
	WHERE emp_no = '110344'
);

-- dept_no가 d009인 값이 여러개일 경우
SELECT *			       
FROM dept_manager
WHERE emp_no IN (
	SELECT emp_no
	FROM dept_manager
	WHERE dept_no = 'd009'
);
     == 또는       
	SELECT *
	FROM dept_manager
	WHERE emp_no = ANY (
	SELECT emp_no
	FROM dept_manager
	WHERE dept_no = 'd009'
	);

--사원별 급여 평균이 7만이상인 사원번호,성,이름,성별을 보여주세요
SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no IN (
	SELECT emp_no
	FROM salaries
	GROUP BY emp_no HAVING AVG(salary) >= 70000
);


/* data 타입의 속성 비교 방법 */
--emp_no가 10009인 사원중 현재다니고잇는사람
SELECT emp_no, last_name
FROM employees
WHERE emp_no = ANY (
	SELECT emp_no
	FROM titles
	WHERE title = 'Senior Engineer'
		AND to_date >= NOW()
);

