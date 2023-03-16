-- UNION / UNION ALL : 
-- 	- 두 쿼리의 결과를 합칩니다.
-- 	- UNION은 중복 값을 제거하고 출력하고, UNION ALL은 중복 값도 출력합니다.
-- SELECT ... FROM ...
-- UNION
-- SELECT ... FROM ...

-- SELECT ... FROM ...
-- UNION ALL
-- SELECT ... FROM ...

SELECT * FROM employees WHERE emp_no = 10001 OR emp_no = 10005
UNION
SELECT * FROM employees WHERE emp_no = 10005; -- 종복된 레코드는 제거

SELECT * FROM employees WHERE emp_no = 10001 OR emp_no = 10005
UNION ALL
SELECT * FROM employees WHERE emp_no = 10005; -- 중복된 레코드도 출력 (주로사용)