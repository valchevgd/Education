SELECT employee_id, first_name
FROM employees AS e
WHERE e.manager_id IS NULL
ORDER BY employee_id DESC
LIMIT 3