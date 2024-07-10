USE sql_store;

-- Will join the orders and customers table on the customer_id table
-- which both have the same values and the same name on each table
-- Then join the orders table with shippers table using shipper_id
-- using a left outer join to also show the orders that have no shippers
SELECT
    o.order_id,
    c.first_name,
    sh.name AS shipper
FROM orders o
JOIN customers c
    USING (customer_id)
LEFT JOIN shippers sh
    USING (shipper_id)