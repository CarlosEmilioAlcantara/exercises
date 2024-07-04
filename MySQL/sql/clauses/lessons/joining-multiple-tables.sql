USE sql_store;

-- Joins the orders table with the customers table via customer_id
-- and then joins the orders table with the order_statuses table
-- via the order_status_id column note that the column has a different
-- name in the orders table
SELECT *
FROM orders o
JOIN customers c
    ON o.customer_id = c.customer_id
JOIN order_statuses os
    ON o.status = os.order_status_id

-- Same as above but display only certain columns to display an owner's order
-- status
SELECT 
    o.order_id,
    o.order_date,
    c.first_name,
    c.last_name,
    os.name AS status
FROM orders o
JOIN customers c
    ON o.customer_id = c.customer_id
JOIN order_statuses os
    ON o.status = os.order_status_id