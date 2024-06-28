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