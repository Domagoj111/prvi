-- This example grants the SELECT privilege on the table employees  in the sample database to the user acount bob@localhost
GRANT SELECT
ON employees
TO bob@localhost;
-- The following example grants UPDATE, DELETE, and INSERT privileges on the table employees to bob@localhost:
GRANT INSERT, UPDATE, DELETE
ON employees 
TO bob@localhost;
-- Global privileges apply to all databases in a MySQL Server.
GRANT SELECT 
ON *.* 
TO bob@localhost;
-- Database privileges apply to all objects in a database. 
GRANT INSERT 
ON classicmodels.* 
TO bob@localhost;
-- Table privileges apply to all columns in a table.
GRANT DELETE 
ON classicmodels.employees 
TO bob@localhsot;
-- Column privileges apply to single columns in a table.
GRANT 
   SELECT (employeeNumner,lastName, firstName,email), 
   UPDATE(lastName) 
ON employees 
TO bob@localhost
-- Stored routine privileges apply to stored procedures and stored functions
GRANT EXECUTE 
ON PROCEDURE CheckCredit 
TO bob@localhost;