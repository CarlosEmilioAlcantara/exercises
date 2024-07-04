USE sql_store;

-- Explicitly join the orders table with the customers table using the 
-- customer_id column
SELECT *
FROM orders o
JOIN customers c
    ON o.customer_id = c.customer_id;

-- Like above but join implicitly. Not suggested.
SELECT *
FROM orders o, customers c
WHERE o.customer_id = c.customer_id;