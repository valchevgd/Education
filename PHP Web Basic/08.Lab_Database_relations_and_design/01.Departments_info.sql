select department_id, count(id) as 'Number of employees'
from employees
group by department_id