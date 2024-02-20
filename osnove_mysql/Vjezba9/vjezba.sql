SELECT 
    AVG(buyprice) 'Average Price'
FROM
    products;

--

SELECT 
    SUM(quantityOrdered) SalesQuantity
FROM
    orderdetails;

--

SELECT 
    concat(contactFirstName,' ',contactLastName) Fullname
FROM
    customers;

--

SELECT 
    orderNumber, 
    DATEDIFF(requiredDate, shippedDate) daysLeft
FROM
    orders
ORDER BY daysLeft DESC;