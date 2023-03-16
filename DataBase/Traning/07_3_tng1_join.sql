-- 1.사원의 사원번호, 풀네임, 직책명을 출력해 주세요.
SELECT emp.emp_no, concat(emp.first_name,' ',emp.last_name) fullname, tt.title
FROM employees emp
	INNER JOIN titles tt
		ON emp.emp_no = tt.emp_no
WHERE tt.to_date >= NOW();
		
-- 2.사원의 사원번호, 성별, 현재 월급을 출력해 주세요.
SELECT emp.emp_no, emp.gender, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW();

-- 3.10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요.
SELECT CONCAT(emp.first_name,' ',emp.last_name) fullname, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010;

-- 4.사원의 사원번호, 풀네임, 소속부서명을 출력해주세요.
SELECT d_e.emp_no, CONCAT(emp.first_name,' ',emp.last_name) fullname, dt.dept_name
FROM dept_emp d_e
	INNER JOIN departments dt
		ON d_e.dept_no = dt.dept_no
	INNER JOIN employees emp
		ON d_e.emp_no = emp.emp_no
where d_e.to_date >= NOW()
ORDER BY d_e.emp_no;
	
-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해주세요 
SELECT emp.emp_no, sal.salary, CONCAT(emp.first_name,' ',emp.last_name) fullname
FROM salaries sal
	INNER JOIN employees emp
		ON sal.emp_no = emp.emp_no
WHERE to_date >= NOW()
ORDER BY salary DESC
LIMIT 10;

-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해주세요 

SELECT dt.dept_name 부서명
	,CONCAT(emp.first_name,' ',emp.last_name) fullname
	,dm.from_date 입사일
FROM departments dt
	INNER JOIN dept_manager dm
		ON dt.dept_no = dm.dept_no
	INNER JOIN employees emp
		ON dm.emp_no = emp.emp_no
WHERE dm.to_date >= NOW();

-- 7.현재 직책이 "Staff"인 사원의 현재 전체 평균 월급를 출력해 주세요.
SELECT AVG(sal.salary)
FROM salaries sal
	INNER JOIN titles tl
		ON sal.emp_no = tl.emp_no
WHERE tl.to_date >= NOW()
	AND tl.title = 'staff'
	AND sal.to_date >= NOW();

-- 8.부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해 주세요.
SELECT
	CONCAT(emp.first_name,' ',emp.last_name) fullname
	,dm.from_date 입사일
	,dm.emp_no 사번
	,dt.dept_no 부서번호
FROM departments dt
	INNER JOIN dept_manager dm
		ON dt.dept_no = dm.dept_no
	INNER JOIN employees emp
		ON dm.emp_no = emp.emp_no;
		
-- 9.현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해 주세요.
SELECT tl.title , TRUNCATE(AVG(sal.salary),0)
FROM titles tl
	INNER JOIN salaries sal
		ON tl.emp_no = sal.emp_no
WHERE sal.to_date >= NOW() 
	AND tl.to_date >= NOW()
GROUP BY tl.title HAVING AVG(sal.salary) >= 60000
ORDER BY AVG(sal.salary) DESC;

-- 10.성별이 여자인 사원들의 직급별 사원수를 출력해 주세요.
SELECT tl.title 직급, COUNT(emp.emp_no) 사원수
FROM employees emp
	INNER JOIN titles tl
		ON emp.emp_no = tl.emp_no
WHERE emp.gender = 'F'
	AND tl.to_date >= NOW()
	AND em.
GROUP BY tl.title;

-- 11. 직급별 퇴사한 남자 사원수
SELECT A.gender, COUNT(A.gender) AS cnt
FROM employees A
INNER JOIN (
	SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE('9999-01-01')
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;