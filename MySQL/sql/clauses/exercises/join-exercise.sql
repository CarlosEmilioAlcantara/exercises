USE sql_store;

-- Join the order_items table with the products table and display the order_id,
-- the product_id, the product's name, the quantity, and the unit_price
-- use aliasing
SELECT
    order_id, p.product_id, name, quantity_in_stock, oi.unit_price
FROM
    order_items oi
JOIN
    products p
    ON oi.product_id = p.product_id
;