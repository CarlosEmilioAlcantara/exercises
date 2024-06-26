USE sql_store;

-- Sort the records by the total price with highest first
SELECT
    *, (quantity * unit_price) AS total_price
FROM
    order_items
ORDER BY
    (quantity * unit_price) DESC;
