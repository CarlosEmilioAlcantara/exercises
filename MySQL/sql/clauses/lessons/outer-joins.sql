USE sql_store;

-- Returns all customers even those without any orders
SELECT 
    c.customer_id,
    c.first_name,
    o.order_id
FROM customers c
LEFT JOIN orders o
    ON c.customer_id = o.customer_id
ORDER BY c.customer_id;

-- Returns all orders even those without any customers
-- Since all orders must have a customer to be created this will actually just
-- return the same records as an (INNER) JOIN
SELECT 
    c.customer_id,
    c.first_name,
    o.order_id
FROM customers c
RIGHT JOIN orders o
    ON c.customer_id = o.customer_id
ORDER BY c.customer_id;

-- Swap the tables for a RIGHT (OUTER) JOIN to return values that makes sense
-- Since the customers table (a table that can have NULL order_id values)
SELECT 
    c.customer_id,
    c.first_name,
    o.order_id
FROM orders o
RIGHT JOIN customers c
    ON c.customer_id = o.customer_id
ORDER BY c.customer_id;