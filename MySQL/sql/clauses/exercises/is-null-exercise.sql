USE sql_store;

-- Get the orders that are not shipped
SELECT
    *
FROM
    orders
WHERE
    shipped_date IS NULL -- match any shipped date that is empty
                         -- if no shipped date then not delivered is the logic

SELECT
    *
FROM
    orders
WHERE
    shipper_id IS NULL -- how could it have been shipped if no one is shipping
                       -- it?