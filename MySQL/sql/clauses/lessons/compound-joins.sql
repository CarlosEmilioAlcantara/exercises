USE sql_store;

-- Compound joining. Joining the order_items table with the order_item_notes
-- table twice on two sets of columns that they both share
SELECT *
FROM order_items oi
JOIN order_item_notes oin
    ON oi.order_id = oin.order_id
    AND oi.product_id = oin.product_id