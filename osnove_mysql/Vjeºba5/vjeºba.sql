CREATE USER IF NOT EXISTS super@localhost
IDENTIFIED BY '123456789';

GRANT ALL 
ON classicmodels.* 
TO super@localhost;