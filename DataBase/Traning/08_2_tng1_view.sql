CREATE OR replace VIEW test_view
AS
	SELECT
		emp.emp_no '사원번호'
		,CONCAT(emp.first_name,' ',emp.last_name) 'fullname'
		,dep.dept_name '소속부서명'
	FROM employees emp
		INNER JOIN dept_emp dept
			ON emp.emp_no = dept.emp_no
		INNER JOIN departments dep
			ON dep.dept_no = dept.dept_no
	WHERE dept.to_date >= NOW()
	ORDER BY emp.emp_no;