select first_name, last_name, hire_date, name
from employees as e
inner join departments as d
where e.department_id=d.department_id and (d.name = 'Sales' or d.name = 'Finance')
order by hire_date