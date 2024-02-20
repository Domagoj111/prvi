DELIMITER //
 
CREATE PROCEDURE GetAllProducts()
BEGIN
    SELECT *  FROM products;
END //
 
DELIMITER ;

--


DELIMITER //
 
CREATE PROCEDURE GetOfficeByCountry(
    IN countryName VARCHAR(255)
)
BEGIN
    SELECT * 
     FROM offices
    WHERE country = countryName;
END //
 
DELIMITER ;

--

DELIMITER //
 
CREATE PROCEDURE GetTotalOrder()
BEGIN
    DECLARE totalOrder INT DEFAULT 0;
    
    SELECT COUNT(*) 
    INTO totalOrder
    FROM orders;
    
    SELECT totalOrder;
END //
 
DELIMITER ;