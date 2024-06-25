-- Select the sql_store database
USE sql_store;

-- Start of the SELECT statement
SELECT * -- Select every column
FROM customers -- Select the table customers
-- WHERE customer_id = 1 -- Select the record where customer_id is equal to 1
ORDER BY first_name; -- Order set of records by the first name in 
                     -- descending order