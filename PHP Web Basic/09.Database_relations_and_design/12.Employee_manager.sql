SELECT e.employee_id, e.first_name, e.manager_id, m.first_name AS 'manager_name'
FROM employees AS e
INNER JOIN employees AS m
ON e.manager_id=m.employee_id
WHERE e.manager_id=3 OR e.manager_id=7
ORDER BY first_name ASC