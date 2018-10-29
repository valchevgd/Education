SELECT AVG(e.`salary`) as 'min_average_salary'
FROM `employees` AS e
GROUP BY e.`department_id`
ORDER BY AVG(e.`salary`) asc
limit 1