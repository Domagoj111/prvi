
-- tko je kome šef?
SELECT *
FROM employees e1 INNER JOIN employees e2
ON e1.employeeNumber=e2.reportsTo
LIMIT 7 OFFSET 7;

-- koliko koji šef ima zaposlenika
SELECT 
e1.employeeNumber
, e1.lastName
, e1.firstName
, COUNT(*) brojPodredjenih
FROM employees e1 INNER JOIN employees e2
ON e1.employeeNumber=e2.reportsTo
GROUP BY e1.employeeNumber;
-- WHERE reportsTo=1056;


-- GRUPIRANJE
/*
   order, orderdetails,
   ordernumber
   status
   ukupnuc cijenu
*/
SELECT 
o.orderNumber
, o.`status`
, SUM(od.quantityOrdered * od.priceEach) AS cijena
FROM orders o LEFT JOIN orderdetails od ON o.orderNumber=od.orderNumber
GROUP BY o.orderNumber;

SELECT 
o.orderNumber
, o.`status`
, SUM(od.quantityOrdered * od.priceEach) AS cijena
FROM orders o LEFT JOIN orderdetails od USING(orderNumber)
GROUP BY o.orderNumber;

SELECT 
*
, (od.quantityOrdered * od.priceEach) AS cijena
FROM orders o LEFT JOIN orderdetails od ON o.orderNumber=od.orderNumber;

-- FILTRIRANJE  WHERE
SELECT
*
FROM customers c LEFT JOIN orders o USING(customerNumber)
WHERE o.orderNumber IS NULL
AND c.customerNumber BETWEEN 307 AND 370
AND c.contactLastName LIKE '%r';

-- RIGHT JOIN i filtriranje
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

