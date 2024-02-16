SELECT 
e.employeeNumber
, e.lastName
, e.firstName
FROM customers c RIGHT JOIN employees e ON c.salesRepEmployeeNumber=e.employeeNumber
WHERE c.customerNumber IS NULL;

-- izvedene ili derivirana tablica
SELECT
CONCAT(zaposlenici.lastName,' --> ',zaposlenici.firstName) AS djelatnici
FROM
(
SELECT 
e.employeeNumber
, e.lastName
, e.firstName
FROM customers c RIGHT JOIN employees e ON c.salesRepEmployeeNumber=e.employeeNumber
WHERE c.customerNumber IS NULL) zaposlenici
WHERE zaposlenici.employeeNumber BETWEEN 1076 AND 1143;
;


-- DISTINCT, plus HAVING FILTER
-- SELECT * FROM Table1 WHERE id NOT IN (SELECT id FROM Table2)
-- Nadji proizvod kojeg nitko nije kupio
SELECT *
, p.productCode AS sifraProizvoda
FROM products p WHERE p.productCode NOT IN ( 
SELECT 
DISTINCT od.productCode 
FROM orders o
CROSS JOIN orderdetails od
WHERE o.orderNumber = od.orderNumber)
HAVING sifraProizvoda ='S18_3233';