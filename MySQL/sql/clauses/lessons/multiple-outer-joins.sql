USE sql_store;

-- Return customers with or without orders and with shippers (shipped)
SELECT 
    c.customer_id,
    c.first_name,
    o.order_id,
    sh.name AS shipper
FROM customers c
LEFT JOIN orders o
    ON c.customer_id = o.customer_id
JOIN shippers sh
    ON o.shipper_id = sh.shipper_id
ORDER BY c.customer_id
;

-- Return customers with or without orders and with or without shippers
-- (not shipped)
SELECT 
    c.customer_id,
    c.first_name,
    o.order_id,
    sh.name AS shipper
FROM customers c
LEFT JOIN orders o
    ON c.customer_id = o.customer_id
LEFT JOIN shippers sh
    ON o.shipper_id = sh.shipper_id
ORDER BY c.customer_id
;

-- Return customers with or without orders and with or without shippers
-- (not shipped)
-- also returns the order_id of those with or without orders and the
-- product_id and name but since an entry for an order in the orders table
-- is required to have an order if a customer has no orders, order_id and
-- product_id are NULL
SELECT 
    c.customer_id,
    c.first_name,
    o.order_id,
    oi.product_id,
    p.name,
    sh.name AS shipper
FROM customers c
LEFT JOIN orders o
    ON c.customer_id = o.customer_id
LEFT JOIN shippers sh
    ON o.shipper_id = sh.shipper_id
LEFT JOIN order_items oi
    ON o.order_id = oi.order_id
LEFT JOIN products p
    ON oi.product_id = p.product_id
ORDER BY c.customer_id;