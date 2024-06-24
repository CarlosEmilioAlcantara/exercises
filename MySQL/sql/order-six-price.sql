USE sql_store;

SELECT
    *
FROM 
    order_items
WHERE
    order_id = 6
    AND (unit_price * quantity) > 30; -- get order #6 and total price