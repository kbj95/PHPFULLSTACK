-- UPDATE의 기본구조
-- UPDATE 테이블명
-- SET ( 컬럼1 = 값1, 컬럼2 = 값2 )
-- WHERE 조건
-- ** 추가설명 : 조건을 적지않을 경우 모든 레코드가 수정됩니다.
--				실수를 방지하기위해 WHERE절을 먼저 작성하고 SET절을 작성하는 것을 추천드립니다.

-- 나의 사원정보
INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500000
	,DATE(19950704)
	,'봉정'
	,'권'
	,'F'
	,DATE(20230315)
);

SELECT *
FROM salaries
WHERE emp_no = 500000;

-- 나의 월급
INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES(
	500000
	,75000
	,DATE(20230228)
	,DATE(20230315)
);

-- 나의 직책
INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	500000
	,'Engineer'
	,DATE(20230228)
	,DATE(20230315)
);

SELECT *
FROM titles
WHERE emp_no = 500000;

-- 나의 소속부서
INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES (
	500000
	,'d008'
	,DATE(20230228)
	,DATE(20230315)
);

SELECT *
FROM dept_emp
WHERE emp_no = 500000;

-- 짝궁  사원정보
INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500001
	,DATE(19961123)
	,'동호'
	,'이'
	,'M'
	,DATE(20230316)
);

SELECT *
FROM employees
WHERE emp_no = 500001;

-- 짝궁 월급 
INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES(
	500001
	,76000
	,DATE(20230228)
	,DATE(20230316)
);

SELECT *
FROM salaries
WHERE emp_no = 500001;

-- 짝궁  직책
INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	500001
	,'Senior Engineer'
	,DATE(20230228)
	,DATE(20230316)
);

SELECT *
FROM titles
WHERE emp_no = 500001;

-- 짝궁  소속부서
INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES (
	500001
	,'d009'
	,DATE(20230228)
	,DATE(20230316)
);

SELECT *
FROM dept_emp
WHERE emp_no = 500001;

-- 소속 부서 변경
UPDATE dept_emp
SET dept_no = 'd009'
WHERE emp_no = 500000;

-- 짝궁정보 삭제
DELETE FROM dept_emp
WHERE emp_no = 500001;

SELECT *
FROM dept_emp
WHERE emp_no = 500001;

-- 관리자 변경
UPDATE dept_emp
SET to_date = DATE(99990101)
WHERE emp_no = 500000;

SELECT *
FROM dept_emp
WHERE emp_no = 500000;

UPDATE dept_manager
SET to_date = DATE(20230301)
WHERE emp_no = 111939;

SELECT *
FROM dept_manager
WHERE emp_no = 111939;

INSERT INTO dept_manager(
	dept_no
	,emp_no
	,from_date
	,to_date
)
VALUES (
	'd009'
	,500000
	,DATE(20230228)
	,DATE(99990101)
);

SELECT *
FROM dept_manager
WHERE to_date >= NOW();

-- 나의 직책 변경
UPDATE titles
SET from_date = DATE(20230315)
WHERE emp_no = 500000;

SELECT *
FROM titles
WHERE emp_no = 500000;

-- 최고 연봉 사원 tokuyasu 43624
SELECT emp_no, first_name
FROM employees
WHERE emp_no = (
	SELECT emp_no
	FROM salaries
	WHERE salary = (
		SELECT MAX(salary)
		FROM salaries
	)
);

-- 최저 연봉 사원 olivera
SELECT emp_no, first_name
FROM employees
WHERE emp_no = (
	SELECT emp_no
	FROM salaries
	WHERE salary = (
		SELECT min(salary)
		FROM salaries
	)
);

-- 평균 연봉- 63,810.7488
SELECT AVG(salary)
FROM salaries;

SELECT AVG(salary)
FROM salaries
WHERE emp_no IN (
	SELECT emp_no 
	FROM employees
);

-- 10번문제 - 42,204.0000
SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975;




