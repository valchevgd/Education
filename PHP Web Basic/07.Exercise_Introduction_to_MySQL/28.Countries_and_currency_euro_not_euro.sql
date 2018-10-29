SELECT country_name, country_code, IF (currency_code = 'EUR', 'Euro', 'Not Euro') AS currency FROM countries
WHERE currency_code IS NOT NULL
ORDER BY country_name ASC;