USE sql_store;

SELECT first_name, last_name -- select only these certain columns
FROM customers;

SELECT last_name, first_name -- query result arrangement can be changed
FROM customers;              -- depending on column selection order
                             -- this will display the last_name column first


SELECT last_name, first_name, points + 10 -- if a column contains integers
FROM customers;                           -- mathematical operations can be done
                                          -- on the values


SELECT last_name, first_name, points, points + 10 -- like above but show
FROM customers;                                   -- original values of points

SELECT 
    last_name,  -- you can break up a clause by having each column in a
    first_name, -- line
    points, 
    (points + 10) * 100 -- keep in mind that MySQL follows PEMDAS
FROM customers; 

SELECT 
    last_name,  
    first_name, 
    points, 
    (points + 10) * 100 AS discount_factor -- rename columns using the AS clause
FROM customers; 

SELECT 
    last_name,  
    first_name, 
    points, 
    (points + 10) * 100 AS 'discount factor' -- name with spaces
FROM customers; 

SELECT DISTINCT state -- filter result to only show one result of each data
FROM customers;       -- in a column, so if two people live in VA instead of
                      -- displaying two VAs the result will only be one VA