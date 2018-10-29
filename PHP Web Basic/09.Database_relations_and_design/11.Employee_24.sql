SELECT e.employee_id,e.first_name, IF(p.start_date > 2005-01-01, NULL, p.name) AS 'project_name'
FROM employees AS e
INNER JOIN employees_projects AS ap
ON e.manager_id=ap.employee_id
INNER JOIN projects AS p
ON ap.project_id=p.project_id
WHERE e.employee_id=24