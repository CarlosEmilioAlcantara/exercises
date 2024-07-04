USE sql_store;

-- To join two tables from different databases simply prefix the name of the
-- database before the name of the table. In this case the products table comes
-- from the sql_inventory database while the order_items table has no need for
-- prefixing because we are querying inside it already.
SELECT
    *
FROM
    order_items oi
JOIN sql_inventory.products p
    ON oi.product_id = p.product_id

-- The same but since we're coming from the sql_inventory database we need to 
-- prefix order_items with the database it orginates from.
USE sql_inventory;

SELECT
    *
FROM
    sql_store.order_items oi
JOIN products p
    ON oi.product_id = p.product_id