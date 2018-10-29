select first_name, last_name, name, address_text
from employees as e
inner join addresses as a
on  e.address_id = a.address_id 
left join towns 
on a.town_id=towns.town_id
order by first_name
limit 5