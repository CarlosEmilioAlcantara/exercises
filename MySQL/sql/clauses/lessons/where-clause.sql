USE sql_store;

SELECT *
FROM customers
WHERE points > 3000; -- retrieve all records where a customer's points is
                     -- greater than 3000

SELECT *
FROM customers
WHERE state = 'va'; -- retrieve all records where a customer's state is VA
                    -- note how the query string is all lower case
                    -- MySQL is case-insensitive

SELECT *
FROM customers
WHERE state <> 'va'; -- retrieve all records where a customer's state is not VA
                     -- note the usage of <> instead of != to comply with
                     -- standards

SELECT *
FROM customers
WHERE birth_date > '1990-01-01'; -- retrieve all records where a customer's
                                 -- birthdate is greater than January 1, 1990 
                                 -- note to use MySQL standard date format
                                 -- yyyy-mm-dd