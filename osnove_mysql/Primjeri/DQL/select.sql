SELECT * 
FROM employees;
--
SELECT lastName
FROM employees;
--
SELECT 
    lastname, 
    firstname, 
    jobtitle
FROM
    employees;
--
SELECT 
    lastname
FROM
    employees
ORDER BY 
    lastname;
--
SELECT 
    DISTINCT lastname
FROM
    employees
ORDER BY 
    lastname;
--
SELECT DISTINCT
    state, city
FROM
    customers
WHERE
    state IS NOT NULL
ORDER BY 
    state, 
    city;
-- 
SELECT 
    COUNT(DISTINCT state)
FROM
    customers
WHERE
    country = 'USA';
--
SELECT DISTINCT
    state
FROM
    customers
WHERE
    state IS NOT NULL
LIMIT 5;