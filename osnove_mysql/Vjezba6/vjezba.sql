SELECT * 
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
    contactLastname,
    contactFirstname
FROM
    customers
ORDER BY
    contactLastname DESC;
--
SELECT 
    lastname, 
    firstname, 
    jobtitle
FROM
    employees
WHERE
    jobtitle = 'Sales Rep';
--
SELECT 
    DISTINCT lastname
FROM
    employees
ORDER BY 
    lastname;