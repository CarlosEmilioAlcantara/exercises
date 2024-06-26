USE sql_store;

SELECT
    *
FROM
    customers
WHERE
    phone IS NULL -- match any customer without a phone number

SELECT
    *
FROM
    customers
WHERE
    phone IS NOT NULL -- match any customer with a phone number