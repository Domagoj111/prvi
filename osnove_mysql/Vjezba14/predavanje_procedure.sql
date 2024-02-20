-- TRIGGERI

CREATE DEFINER=``@`%` TRIGGER `orderdetails_before_update` BEFORE UPDATE ON `orderdetails` FOR EACH ROW BEGIN
  IF NEW.quantityOrdered > kolicinaProizvoda(OLD.productCode)
  THEN
  		SIGNAL SQLSTATE '45000' SET
      MESSAGE_TEXT = 'Kolicina pre velika.';
  -- NEW.quantityOrdered=OLD.quantityOrdered;
   INSERT INTO `classicmodels`.`storelog` (`event`) VALUES ('naruceno vise od moguceg');
  END IF;
END



CREATE DEFINER=``@`%` TRIGGER `orderdetails2log` AFTER UPDATE ON `orderdetails` FOR EACH ROW BEGIN
INSERT INTO storelog(`event`) VALUES(CONCAT("order details: ",NEW.orderNumber,"$",NEW.productCode,"$",OLD.quantityOrdered," -> ", NEW.quantityOrdered));
END


-- FUNKCIJE
CREATE FUNCTION `kolicinaProizvoda`(
	`prodcode` VARCHAR(15)
)
RETURNS int(11)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT 'S10_1678'
BEGIN
DECLARE 	kolicina VARCHAR(15);
SELECT quantityInStock INTO kolicina FROM products WHERE productCode=prodCode;
RETURN kolicina;
END

-- PROCEDURE
CREATE PROCEDURE `getCustomer`()
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ''
BEGIN
SELECT * FROM customers;

END


CREATE PROCEDURE `totalOrder2`(
	OUT `totalOrder` INT,
	OUT `maxCustNumber` INT
)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ''
BEGIN
    -- DECLARE totalOrder INT DEFAULT 0; 
    SELECT 
	 COUNT(*) INTO totalOrder
    FROM orders;
    
        SELECT 
	MAX(customerNumber) INTO maxCustNumber
    FROM orders;
   -- SET totalOrder=99;
    
END

-- ------------------
CALL totalOrder2(@totalOrder,@maxCustNumber);
SELECT @totalOrder;
SELECT @maxCustNumber;
-- ----------------