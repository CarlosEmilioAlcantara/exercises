USE sql_store;

-- Join order_items with order_items_notes using two columns, order_id and
-- product_id
SELECT *
FROM order_items
JOIN order_item_notes
    USING (order_id, product_id)