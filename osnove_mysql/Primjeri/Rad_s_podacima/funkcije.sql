SELECT 
    productCode, 
    SUM(priceEach * quantityOrdered) total
FROM
    orderDetails
GROUP BY productCode
ORDER BY total DESC;
--
SELECT 
    concat(contactFirstName,' ',contactLastName) Fullname
FROM
    customers;
--
SELECT 
    productCode,
    ROUND(AVG(quantityOrdered * priceEach)) avg_order_item_value
FROM
    orderDetails
GROUP BY 
    productCode;
--
SELECT 
    orderNumber, 
    DATEDIFF(requiredDate, shippedDate) daysLeft
FROM
    orders
ORDER BY daysLeft DESC;
--
SELECT 
    SUM(IF(status = 'Shipped', 1, 0)) AS Shipped,
    SUM(IF(status = 'Cancelled', 1, 0)) AS Cancelled
FROM
    orders;