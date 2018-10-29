select employee_id, first_name, last_name, name
from employees as e
inner join departments as d
where e.department_id=d.department_id and d.name = 'Sales'
order by employee_id desc