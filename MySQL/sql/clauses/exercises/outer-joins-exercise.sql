-- Outer join the products table with the order_items table and display the
-- product_id, name (of product), and quantity

USE sql_store;

SELECT 
    p.product_id,
    p.name,
    oi.quantity
FROM products p
LEFT JOIN order_items oi
    ON p.product_id = oi.product_id;