SELECT * FROM orders o
CROSS JOIN orderdetails od
WHERE o.orderNumber = od.orderNumber;