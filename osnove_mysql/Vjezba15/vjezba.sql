-- 1. start a new transaction
START TRANSACTION;
 
-- 2. insert a new payment for customer 145
INSERT INTO payments(customerNumber,
                   checkNumber,
                   paymentDate,
                   amount)
VALUES(145,
       'BM326326',
       '2019-06-10',
       '9277.85');
              
-- 4. commit changes    
COMMIT;