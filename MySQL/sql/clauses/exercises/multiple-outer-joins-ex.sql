-- Join the orders table, customers, shippers, and order_status table
-- Display the order_date, the order_id, the customer's first_name, the shipper
-- and the status of the order
USE sql_store;

SELECT 
    o.order_id,
    c.customer_id,
    c.first_name,
    sh.name AS shipper,
    os.name AS order_status
FROM orders o
JOIN customers c
    ON o.customer_id = c.customer_id
LEFT JOIN shippers sh
    ON o.shipper_id = sh.shipper_id
LEFT JOIN order_statuses os
    ON o.status = os.order_status_id;